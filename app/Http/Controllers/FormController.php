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
            $where = ['where' => [], 'whereBetween' => []];
            foreach ($request->all() as $index => $item) {
                switch ($index) {
                    case 'amount_to':
                    case 'amount_from':
                    case 'area_to':
                    case 'area_from':
                        $where['whereBetween'] = array_merge($where['whereBetween'], [$index => $item]);
                        break;
                    case '_token':
                        break;
                    default:
                        if ($item != '0') {
                            $where['where'][] = [$index, $item];
                            break;
                        } else {
                            break;
                        }
                }
            }
            //dd($where);
            if (!empty($where['where'])) {
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
                    ->where($where['where'])
                    ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                    ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);
            } else {
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
                    ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                    ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                    ->orderBy('created_at', 'desc')
                    ->paginate(6);
            }

        }
        return view('listening.ads', compact('listingsData'));
    }
}
