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
        if (!empty($request['_token'])) {
            $whereArr = [];
            //dd($request->all());
            foreach ($request->all() as $index => $item) {
                if ($index != '_token') {
                    if ($request[$index] !== 0) {
                        $whereArr = array_merge($whereArr, [$index => $item]);
                    }
                } else {
                    continue;
                }
            }
            //dd($whereArr);
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
                ->where([
                    ['cities', $whereArr['cities']],
                    ['categories', $whereArr['categories']],
                    ['type', $whereArr['type']],
                    ['rooms', $whereArr['rooms']],
                    ['baths', $whereArr['baths']]
                ])
                ->whereBetween('area', [$whereArr['area_from'], $whereArr['area_to']])
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        }
        return view('listening.ads', compact('listingsData'));
    }
}
