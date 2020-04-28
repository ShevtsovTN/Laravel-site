@extends('layout')
@section('title')
    @lang('title.home')
@endsection
@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
            <div class="hero-slides owl-carousel">
                <!-- Single Hero Slide -->
                <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/hero1.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">@lang('content.title.0')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Slide -->
                <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/hero2.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">@lang('content.title.1')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Slide -->
                <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/hero3.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">@lang('content.title.2')</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ##### Hero Area End ##### -->

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

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp">
                            <h2>@lang('content.home.properties_area.0')</h2>
                            <p>@lang('content.home.properties_area.1')</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature1.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature2.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature3.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="400ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature4.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="500ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature5.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="../img/bg-img/feature6.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="../img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="../img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="../img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="../img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="../img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(../img/bg-img/cta.jpg)">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <div class="cta-content text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="300ms">@lang('content.home.action_area.0')</h2>
                            <h6 class="wow fadeInUp" data-wow-delay="400ms">@lang('content.home.action_area.1')</h6>
                            <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">@lang('content.home.action_area.2')</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                            <h2>@lang('content.home.testimonials_area.0')</h2>
                            <p>@lang('content.home.testimonials_area.1')</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                            @foreach($reviews as $review)
                                <div class="single-testimonial-slide text-center">
                                    <h5>{{ $review->title }}</h5>
                                    <p>{{ $review->description }}</p>

                                    <div class="testimonial-author-info">
                                        <img src="../img/bg-img/feature6.jpg" alt="">
                                        <p>{{ $review->author }}, <span>{{ $review->position }}</span></p>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center">
            <!-- Editor Content -->
            <div class="editor-content-area">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                    <img src="../img/icons/prize.png" alt="">
                    <h2>jeremy Scott</h2>
                    <p>@lang('content.home.editor_area.0')</p>
                </div>
                <p class="wow fadeInUp" data-wow-delay="500ms">@lang('content.home.editor_area.1')</p>
                <div class="address wow fadeInUp" data-wow-delay="750ms">
                    <h6><img src="../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                    <h6><img src="../img/icons/envelope.png" alt=""> test@test.com</h6>
                </div>
                <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                    <img src="../img/core-img/signature.png" alt="">
                </div>
            </div>

            <!-- Editor Thumbnail -->
            <div class="editor-thumbnail">
                <img src="../img/bg-img/editor.jpg" alt="">
            </div>
        </section>
    <!-- ##### Editor Area End ##### -->
@endsection

