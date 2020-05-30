<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Listings;
use App\Models\Review;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
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
     * ListingEn page generation method
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
     * @return Factory|View
     */
    public function generateListings()
    {
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
            ->paginate(6);
        return view('listening.ads', compact('listingsData'));
    }

    public function generateContacts()
    {
        return view('contact');
    }
}
