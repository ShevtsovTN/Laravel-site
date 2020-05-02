@extends('layout')
@section('title')
    @lang('title.about')
@endsection
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">@lang('content.title.3')</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('components.search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>@lang('content.about.title.0')</h2>
                        <p>@lang('content.about.description.0')</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="../img/bg-img/about.jpg" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms">@lang('content.about.text')</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>@lang('content.about.title.1')</h2>
                        <p>@lang('content.about.description.1')</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                        <!-- Single Slide -->
                        <div class="single-featured-property">
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

                        <!-- Single Slide -->
                        <div class="single-featured-property">
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

                        <!-- Single Slide -->
                        <div class="single-featured-property">
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

                        <!-- Single Slide -->
                        <div class="single-featured-property">
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
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(../img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">@lang('content.about.title.2')</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">@lang('content.about.description.2')</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">@lang('content.about.button')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>@lang('content.about.title.3')</h2>
                        <p>@lang('content.about.description.3')</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="../img/bg-img/team1.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../img/icons/prize.png" alt="">
                                <h2>Jeremy Scott</h2>
                                <p>@lang('content.about.position')</p>
                            </div>
                            <div class="address">
                                <h6><img src="../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../img/icons/envelope.png" alt=""> test@test.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="../img/bg-img/team2.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../img/icons/prize.png" alt="">
                                <h2>Maria Williams</h2>
                                <p>@lang('content.about.position')</p>
                            </div>
                            <div class="address">
                                <h6><img src="../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../img/icons/envelope.png" alt=""> test@test.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="../img/bg-img/team3.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../img/icons/prize.png" alt="">
                                <h2>Patrick Joe</h2>
                                <p>@lang('content.about.position')</p>
                            </div>
                            <div class="address">
                                <h6><img src="../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../img/icons/envelope.png" alt=""> test@test.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->
@endsection
