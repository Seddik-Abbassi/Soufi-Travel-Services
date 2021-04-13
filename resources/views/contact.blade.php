@extends('layout.layout')

@section('content')

<div id="fh5co-contact" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Contact</h3>
            </div>
        </div>
            <div class="row animate-box">
                <div class="col-md-6">
                    <h3 class="section-title">Adresse</h3>
                    <ul class="contact-info">
                        <li><i class="icon-location-pin"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                        <li><i class="icon-phone2"></i>+ 1235 2355 98</li>
                        <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <form action="{{ route('contactform') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="" cols="30" rows="7" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn btn-primary">
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
