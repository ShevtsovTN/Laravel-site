<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ListingEn;
use App\Models\Review;
use Illuminate\Http\Request;

class PageGenerationData extends Controller
{
    /**
     * Post page generation method
     *
     * @param Blog $blog
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function generateBlog(Blog $blog)
    {
        return view('blog.blog', compact('blog'));
    }

    /**
     * ListingEn page generation method
     *
     * @param ListingEn $ad
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function generateListing(ListingEn $ad)
    {
        return view('listening.ad', compact('ad'));
    }

    /**
     * Review page generation method
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function generateIndex()
    {
        $reviews = Review::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $listingsData = ListingEn::select(
                'title',
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
}
