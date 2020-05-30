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
    @include('components.search')
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
                            <p>${{ $ad->amount }}</p>
                        </div>
                        <h5>{{ $ad->title }}</h5>
                        <p class="location"><img src="../../img/icons/location.png" alt="">{{ $ad->address }}</p>
                        <p>{{ $ad->description }}</p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="../../img/icons/new.png" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="../../img/icons/bathtub.png" alt="">
                                <span>{{ $ad->baths }}</span>
                            </div>
                            <div class="garage">
                                <img src="../../img/icons/garage.png" alt="">
                                <span>{{ $ad->rooms }}</span>
                            </div>
                            <div class="space">
                                <img src="../../img/icons/space.png" alt="">
                                <span>{{ $ad->area }} @lang('content.components_search.units_measuring.0')</span>
                            </div>
                        </div>
                        <!-- Core Features -->
                        <ul class="listings-core-features d-flex align-items-center">
                            @foreach($ad->options as $option)
                                <li><i class="fa fa-check" aria-hidden="true"></i> {{ $option }}</li>
                                @endforeach
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
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="contact-name" placeholder="@lang('content.contacts.contact_form.0')">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" id="contact-number" placeholder="@lang('content.contacts.contact_form.1')">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="contact-email" placeholder="@lang('content.contacts.contact_form.2')">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="@lang('content.contacts.contact_form.3')"></textarea>
                                    </div>
                                    <button type="submit" class="btn south-btn">@lang('content.contacts.contact_form.4')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ListingEn Maps -->
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
