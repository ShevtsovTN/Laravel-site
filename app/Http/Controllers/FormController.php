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
     * @return Factory|View
     */
    public function searchListenings(Request $request)
    {

        $sorting = $request->query('sorting')?? '';
        $where = ['where' => [], 'whereBetween' => []];
        foreach ($request->input() as $index => $item) {
            switch ($index) {
                case 'amount_to':
                case 'amount_from':
                case 'area_to':
                case 'area_from':
                    $where['whereBetween'] = array_merge($where['whereBetween'], [$index => $item]);
                    break;
                case '_token':
                case 'page':
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
        $area_from = $request->query('area_from')?? $where['whereBetween']['area_from'];
        $area_to = $request->query('area_to')?? $where['whereBetween']['area_to'];
        $amount_from = $request->query('amount_from')?? $where['whereBetween']['amount_from'];
        $amount_to = $request->query('amount_to')?? $where['whereBetween']['amount_to'];

        return view('listening.ads', compact(
            'listingsData',
            'sorting',
            'area_from',
            'area_to',
            'amount_from',
            'amount_to'));
    }
}
