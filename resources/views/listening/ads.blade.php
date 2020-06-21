@extends('layout')
@section('title')
    @lang('title.ads')
@endsection
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(../../img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">@lang('content.title.4')</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('components.search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### ListingEn Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <!--<div class="view-area d-flex align-items-center">
                            <span>@lang('content.listings.0')</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>-->
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">@lang('content.listings.1')</span>
                            <select class="sort-options">
                                <option class="option" value="0">@lang('content.listings.2')</option>
                                <option class="option" value="1">@lang('content.listings.3')</option>
                                <option class="option" value="2">@lang('content.listings.4')</option>
                                <option class="option" value="3">@lang('content.listings.5')</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="listings">
            @foreach($listingsData as $listingData)
                <!-- Single Featured Property -->
                    <a href="{{ route('listing', $listingData->listing_id) }}" data-value="{{ $listingData->amount }}"
                       data-type="{{ $listingData->type }}" data-created="{{ strtotime($listingData->created_at) }}"
                       class="listing col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="{{$listingData->photo_title}}" alt="">

                                <div class="tag">
                                    <span>{{$listingData->type}}</span>
                                </div>
                                <div class="list-price">
                                    <p>${{$listingData->amount}}</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>{{$listingData->categories}} {{$listingData->cities}}</h5>
                                <p class="location"><img src="../img/icons/location.png"
                                                         alt="">{{$listingData->address}}</p>
                                <p>{{$listingData->description_title}}</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>{{$listingData->baths}}</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>{{$listingData->rooms}}</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>{{$listingData->area}} @lang('content.components_search.units_measuring.0')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
            @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="south-pagination d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            <div class="pagination">
                                {{$listingsData->onEachSide(1)->appends([
                                'sorting' => $sorting?? '',
                                'area_from' => $area_from?? '',
                                'area_to' => $area_to?? '',
                                'amount_from' => $amount_from?? '',
                                'amount_to' => $amount_to?? ''
                                ])->links()}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### ListingEn Content Wrapper Area End ##### -->
@endsection
