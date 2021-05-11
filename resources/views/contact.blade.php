@extends('layout.layout')

@section('content')

<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>@lang('message.contact')</h3>
            </div>
        </div>
            <div class="row animate-box">
                <div class="col-md-6">
                    <h3 class="section-title">@lang('message.adresse')</h3>
                    <ul class="contact-info">
                        <li><i class="icon-location-pin"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li><i class="icon-phone2"></i>+ 1235 2355 98</li>
                        <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <form action="{{ url(app()->getLocale(),'/contactform') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="@lang('message.nomformcontact')" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="@lang('message.emailformcontact')" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="" cols="30" rows="7" placeholder="@lang('message.msgformcontact')"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="@lang('message.submitformcontact')" class="btn btn-primary">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>

{{--<div id="map" class="fh5co-map"></div>--}}
@endsection
