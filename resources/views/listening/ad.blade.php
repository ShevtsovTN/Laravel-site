@extends('layout')
@section('title')
    @lang('title.ad')
@endsection
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(../../img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">@lang('content.title.5')</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>@lang('content.components_search.title')</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="@lang('content.components_search.keyword')">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>@lang('content.components_search.cities.4')</option>
                                            <option>@lang('content.components_search.cities.0')</option>
                                            <option>@lang('content.components_search.cities.1')</option>
                                            <option>@lang('content.components_search.cities.2')</option>
                                            <option>@lang('content.components_search.cities.3')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>@lang('content.components_search.categories.0')</option>
                                            <option>@lang('content.components_search.categories.1')</option>
                                            <option>@lang('content.components_search.categories.2')</option>
                                            <option>@lang('content.components_search.categories.3')</option>
                                            <option>@lang('content.components_search.categories.4')</option>
                                            <option>@lang('content.components_search.categories.5')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>@lang('content.components_search.offers.0')</option>
                                            <option>100% @lang('content.components_search.offers.1')</option>
                                            <option>75% @lang('content.components_search.offers.1')</option>
                                            <option>50% @lang('content.components_search.offers.1')</option>
                                            <option>25% @lang('content.components_search.offers.1')</option>
                                            <option>10% @lang('content.components_search.offers.1')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="listings">
                                            <option>@lang('content.components_search.listings.0')</option>
                                            <option>@lang('content.components_search.listings.1')</option>
                                            <option>@lang('content.components_search.listings.2')</option>
                                            <option>@lang('content.components_search.listings.3')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bedrooms">
                                            <option>@lang('content.components_search.rooms.0')</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="bathrooms">
                                            <option>@lang('content.components_search.rooms.1')</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="120" data-max="820" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="120" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">120 @lang('content.components_search.units_measuring.0') - 820 @lang('content.components_search.units_measuring.0')</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 @lang('content.components_search.units_measuring.1') - 1300 @lang('content.components_search.units_measuring.1')</div>
                                    </div>
                                </div>

                                <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>@lang('content.components_search.types.0')</option>
                                                    <option>@lang('content.components_search.types.1') <span>(30)</span></option>
                                                    <option>@lang('content.components_search.types.2') <span>(69)</span></option>
                                                    <option>@lang('content.components_search.types.3') <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>@lang('content.components_search.categories.0')</option>
                                                    <option>@lang('content.components_search.categories.1')</option>
                                                    <option>@lang('content.components_search.categories.2')</option>
                                                    <option>@lang('content.components_search.categories.3')</option>
                                                    <option>@lang('content.components_search.categories.4')</option>
                                                    <option>@lang('content.components_search.categories.5')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>@lang('content.components_search.actions.2')</option>
                                                    <option>@lang('content.components_search.actions.0')</option>
                                                    <option>@lang('content.components_search.actions.1')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>@lang('content.components_search.actions.2')</option>
                                                    <option>@lang('content.components_search.actions.0')</option>
                                                    <option>@lang('content.components_search.actions.1')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ @lang('content.components_search.filters')</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">@lang('content.components_search.buttons')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                        <!-- Single Slide -->
                        <img src="../../img/bg-img/hero4.jpg" alt="">
                        <!-- Single Slide -->
                        <img src="../../img/bg-img/hero5.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                            <p>$945 679</p>
                        </div>
                        <h5>Town house with Modern Architecture</h5>
                        <p class="location"><img src="../../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="../../img/icons/new.png" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="../../img/icons/bathtub.png" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="../../img/icons/garage.png" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="../../img/icons/space.png" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Gated Community</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Automatic Sprinklers</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Ocean Views</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Private Patio</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Beach Access</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Rooftop Terrace</li>
                        </ul>
                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">@lang('content.listing.0')</a>
                            <a href="#" class="btn south-btn active">@lang('content.listing.1')</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="../../img/bg-img/listing.jpg" alt="">
                            <div class="realtor---info">
                                <h2>Jeremy Scott</h2>
                                <p>@lang('content.listing.2')</p>
                                <h6><img src="../../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../../img/icons/envelope.png" alt=""> test@test.com</h6>
                            </div>
                            <div class="realtor--contact-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="realtor-name" placeholder="@lang('content.listing.contact_form.0')">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="realtor-number" placeholder="@lang('content.listing.contact_form.1')">
                                    </div>
                                    <div class="form-group">
                                        <input type="enumber" class="form-control" id="realtor-email" placeholder="@lang('content.listing.contact_form.2')">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="@lang('content.listing.contact_form.3')"></textarea>
                                    </div>
                                    <button type="submit" class="btn south-btn">@lang('content.listing.contact_form.4')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <!--<div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->
@endsection
