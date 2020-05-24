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
    @include('components.search')
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
                    @foreach($listingsData as $listingData)
                        <!-- Single Featured Property -->
                            <a href="{{ route('ad_id', $listingData->listing_id) }}" class="col-12 col-md-6 col-xl-4">
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
                                        <h5>{{$listingData->categories}} in {{$listingData->cities}}</h5>
                                        <p class="location"><img src="../img/icons/location.png" alt="">{{$listingData->address}}</p>
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
                                                <span>{{$listingData->area}} sq ft</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    @endforeach
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

