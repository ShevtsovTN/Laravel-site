<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Listings;
use App\Models\Review;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PageGenerationData extends Controller
{
    /**
     * Post page generation method
     *
     * @param Blog $blog
     * @return Factory|View
     */
    public function generateBlog(Blog $blog)
    {
        return view('blog.blog', compact('blog'));
    }

    /**
     * Admin page generation method
     *
     * @return Factory|View
     */
    public function generateAdmin()
    {
        return view('admin.layout');
    }

    /**
     * Admin Listings page generation method
     *
     *
     */
    public function generateAdminListings()
    {
        return view('admin.ads');
    }

    /**
     * Listing page generation method
     *
     * @param $id
     * @return Factory|View
     */
    public function generateListing($id)
    {
        $data = Listings::select(
            'listing_id',
            'title',
            'description',
            'address',
            'amount',
            'area',
            'rooms',
            'baths',
            'photos',
            'cities',
            'categories',
            'options',
            'type'
        )
            ->where('listing_id', $id)
            ->get();
        foreach ($data as $index => $elem) {
            $elem->options = \GuzzleHttp\json_decode($elem->options, true);
            $elem->photos = \GuzzleHttp\json_decode($elem->photos, true);
            $ad = $elem;
        }
        return view('listening.ad', compact('ad'));
    }

    /**
     * Review page generation method
     *
     * @return Factory|View
     */
    public function generateIndex()
    {
        $reviews = Review::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $listingsData = Listings::select(
                'title',
                'id',
                'listing_id',
                'description_title',
                'amount',
                'type',
                'cities',
                'rooms',
                'baths',
                'area',
                'photo_title',
                'categories',
                'address'
        )
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('home', compact('reviews', 'listingsData'));
    }

    /**
     * @param string $sorting
     * @param array $where
     * @return Factory|View
     */
    public static function generateListings(string $sorting = '', array $where = [])
    {
        //dd($where);
        if (empty($where) && empty($sorting)) {
            $listingsData = Listings::select(
                'title',
                'id',
                'listing_id',
                'created_at',
                'description_title',
                'amount',
                'type',
                'cities',
                'rooms',
                'baths',
                'area',
                'photo_title',
                'categories',
                'address'
            )
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        } else {
            if (!empty($where['where'])) {
                $listingsData = (new Listings)->select('title', 'id', 'listing_id', 'description_title', 'amount', 'type', 'cities', 'rooms', 'baths', 'area', 'photo_title', 'categories', 'address')
                    ->where($where['where'])
                    ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                    ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                    ->orderBy($sorting, 'desc')
                    ->paginate(6);
            } else {
                $listingsData = (new Listings)->select('title', 'id', 'listing_id', 'description_title', 'amount', 'type', 'cities', 'rooms', 'baths', 'area', 'photo_title', 'categories', 'address')
                    ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                    ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                    ->orderBy($sorting, 'desc')
                    ->paginate(6);
            }
        }
        //dd($listingsData);
        return view('listening.ads', compact('listingsData'));
    }

    public function generateContacts()
    {
        return view('contact');
    }
}
