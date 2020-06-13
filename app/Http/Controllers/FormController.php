<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    /**
     * @param Request $request
     * @return void
     */
    public function searchListenings(Request $request)
    {
        $sorting = 'created_at';
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
                case 'sorting':
                    $sorting = $item == 2 ? 'amount' : ($item == 3 ? 'type' : $sorting);
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
        /*if (!empty($where['where'])) {
            $listingsSearch = (new Listings)->select('title', 'id', 'listing_id', 'description_title', 'amount', 'type', 'cities', 'rooms', 'baths', 'area', 'photo_title', 'categories', 'address')
                ->where($where['where'])
                ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                ->orderBy($sorting, 'desc')
                ->paginate(6);
        } else {
            $listingsSearch = (new Listings)->select('title', 'id', 'listing_id', 'description_title', 'amount', 'type', 'cities', 'rooms', 'baths', 'area', 'photo_title', 'categories', 'address')
                ->whereBetween('area', [$where['whereBetween']['area_from'], $where['whereBetween']['area_to']])
                ->whereBetween('amount', [$where['whereBetween']['amount_from'] * 1000, $where['whereBetween']['amount_to'] * 1000])
                ->orderBy($sorting, 'desc')
                ->paginate(6);
        }*/
        //dd($listingsSearch);
        PageGenerationData::generateListings($sorting, $where);
    }
}
