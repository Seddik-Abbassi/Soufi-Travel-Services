@extends('layout.layout')

@section('content')
    <div class="fh5co-hero">
        <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/clear-air-fly-fantastic-travel.jpg);">
            <div class="desc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
{{--                            <div class="tabulation animate-box">--}}

{{--                                <!-- Nav tabs -->--}}
{{--                                <ul class="nav nav-tabs" role="tablist">--}}
{{--                                    <li role="presentation">--}}
{{--                                        <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Bateau</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                                <!-- Tab panes -->--}}
{{--                                <div class="tab-content">--}}
{{--                                    <div role="tabpanel" class="tab-pane active" id="hotels">--}}
{{--                                        <div class="row">--}}
{{--                                            <form action="{{ url('booking-boat') }}" method="POST">--}}
{{--                                                @csrf--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="name">Nom Complet</label>--}}
{{--                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom complet"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="email">Email</label>--}}
{{--                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="from-place">De</label>--}}
{{--                                                        <input type="text" class="form-control" name="from" id="from-place" placeholder="Los Angeles, USA"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="to-place">Vers</label>--}}
{{--                                                        <input type="text" class="form-control" name="to" id="to-place" placeholder="Tokyo, Japan"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt alternate">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="date-start">Arrivée</label>--}}
{{--                                                        <input type="text" class="form-control" name="datestart" id="date-start" placeholder="mm/dd/yyyy"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt alternate">--}}
{{--                                                    <div class="input-field">--}}
{{--                                                        <label for="date-end">Départ</label>--}}
{{--                                                        <input type="text" class="form-control" name="dateend" id="date-end" placeholder="mm/dd/yyyy"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <section>--}}
{{--                                                        <label for="adult">Adultes</label>--}}
{{--                                                        <select class="cs-select cs-skin-border" name="adult">--}}
{{--                                                            @for($i = 1; $i<11; $i++)--}}
{{--                                                                <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                            @endfor--}}
{{--                                                        </select>--}}
{{--                                                    </section>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xxs-12 col-xs-6 mt">--}}
{{--                                                    <section>--}}
{{--                                                        <label for="child">Enfants</label>--}}
{{--                                                        <select class="cs-select cs-skin-border" name="child">--}}
{{--                                                            @for($i = 0; $i<11; $i++)--}}
{{--                                                                <option value="{{$i}}">{{$i}}</option>--}}
{{--                                                            @endfor--}}
{{--                                                        </select>--}}
{{--                                                    </section>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-xs-12">--}}
{{--                                                    <input type="submit" class="btn btn-primary btn-block" value="Valider">--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}

                        </div>

                        <div class="desc2 animate-box">
                            <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1" style="text-align: center">
                                <h2>@lang('message.slidermsg1')</h2>
                                <h2>@lang('message.slidermsg2')</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="font-size: 1.7em !important; text-align: center;margin-top: 50px">
                        <a href="{{ url(app()->getLocale(),'/bateaux') }}" class="btn btn-success" style="font-size: 0.6em !important;font-weight: bold">Explorer nos voyages en bateau</a>
                        <a href="{{ url(app()->getLocale(),'/footballcamps') }}" class="btn btn-success" style="font-size: 0.6em !important;font-weight: bold">Explorer nos Stage Football</a>
                    </div>
                </div>
            </div>
        </div>

    </div>





<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>@lang('message.messagepertriptype')</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/business-trip.jpg" alt="Business Trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Business</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/plage-trip.jpg" alt="Plage trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Plage</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/sahara-trip.jpg" alt="Sahara trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Sahara</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/business-trip.jpg" alt="Business Trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Business</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/plage-trip.jpg" alt="Plage trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Plage</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="../images/sahara-trip.jpg" alt="Sahara trip" class="img-responsive" width="395px" height="300px">
                    <div class="desc">
                        <span></span>
                        <h3>Sahara</h3>
                        <a class="btn btn-primary btn-outline" href="#">Explorer<i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div id="fh5co-footcamp" class="fh5co-section-gray">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">--}}
{{--                    <h3>Nos Offres Football Camp</h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach($footballcamps as $footballcamp )--}}
{{--                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">--}}
{{--                        <div href="#"><img src="{{ $footballcamp->thumbnail }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">--}}
{{--                            <div class="desc">--}}
{{--                                <span></span>--}}
{{--                                <h3>{{ $footballcamp->title }}</h3>--}}
{{--                                <span>{{ $footballcamp->begin_date }} -> {{ $footballcamp->end_date }}</span>--}}
{{--                                <span class="price">{{ $footballcamp->price }} TND</span>--}}
{{--                                <span style="font-weight: bold">{{ $footballcamp->destination }}</span>--}}
{{--                                <a class="btn btn-primary btn-outline" href="{{ route('footballcamp', $footballcamp->id) }}">Explorer<i class="icon-arrow-right22"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--                <div class="col-md-12 text-center animate-box">--}}
{{--                    <p><a class="btn btn-primary btn-outline btn-lg" href="{{ route('footballcamps') }}">Tous les offres&nbsp;<i class="icon-arrow-right22"></i></a></p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <br><br><br><br>
<div id="fh5co-destination">
    <div class="tour-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul id="fh5co-destination-list" class="animate-box">
                    <li class="one-forth text-center" style="background-image: url(../images/place-1.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Los Angeles</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-2.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Hongkong</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-3.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Italy</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-4.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Philippines</h2>
                            </div>
                        </a>
                    </li>

                    <li class="one-forth text-center" style="background-image: url(../images/place-5.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Japan</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-half text-center">
                        <div class="title-bg">
                            <div class="case-studies-summary">
                                <h2>Destinations les plus populaires</h2>
                                <span><a href="#">Voir toutes les destinations</a></span>
                            </div>
                        </div>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-6.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Paris</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-7.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Singapore</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-8.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Madagascar</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-9.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Egypt</h2>
                            </div>
                        </a>
                    </li>
                    <li class="one-forth text-center" style="background-image: url(../images/place-10.jpg); ">
                        <a href="#">
                            <div class="case-studies-summary">
                                <h2>Indonesia</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Clients satisfaits</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>


            </div>
            <div class="col-md-4">
                <div class="box-testimony animate-box">
                    <blockquote>
                        <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                    <p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
