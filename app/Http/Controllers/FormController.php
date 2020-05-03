<?php

namespace App\Http\Controllers;

use App\Models\ListingEn;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchListenings(Request $request)
    {
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
            ->paginate(6);
        return view('listening.ads', compact('listingsData'));
    }
}
