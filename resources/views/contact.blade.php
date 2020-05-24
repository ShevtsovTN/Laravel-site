@extends('layout')
@section('title')
    @lang('title.contact')
@endsection
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(../img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">@lang('content.title.8')</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>@lang('content.contacts.title')</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>@lang('content.layout.footer.schedule.0')</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>@lang('content.layout.footer.schedule.1')</span> <span>09 AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>@lang('content.layout.footer.schedule.2')</span> <span>@lang('content.layout.footer.schedule.3')</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="../img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="../img/icons/envelope.png" alt=""> test@test.com</h6>
                            <h6><img src="../img/icons/location.png" alt="">@lang('content.layout.footer.address')</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
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
    </section>
@endsection
