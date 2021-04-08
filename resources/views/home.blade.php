@extends('layout.layout')

@section('content')

    <div class="fh5co-hero">
        <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/clear-air-fly-fantastic-travel.jpg);">
            <div class="desc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <div class="tabulation animate-box">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Vol</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Bateau</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Football Camp</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="flights">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">De</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Vers</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Arrivée</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Départ</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adultes</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Enfants</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Valider">
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="hotels">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">De</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Vers</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Arrivée</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Départ</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adultes</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Enfants</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Valider">
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="packages">
                                        <div class="row">
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">De</label>
                                                    <input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <div class="input-field">
                                                    <label for="from">Destination</label>
                                                    <input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-start">Arrivée</label>
                                                    <input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt alternate">
                                                <div class="input-field">
                                                    <label for="date-end">Départ</label>
                                                    <input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mt">
                                                <section>
                                                    <label for="class">Chambres</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Adultes</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6 mt">
                                                <section>
                                                    <label for="class">Enfants</label>
                                                    <select class="cs-select cs-skin-border">
                                                        @for($i = 1; $i<11; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </section>
                                            </div>
                                            <div class="col-xs-12">
                                                <input type="submit" class="btn btn-primary btn-block" value="Search Packages">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="desc2 animate-box">
                            <div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1" style="text-align: center">
                                <h2>Voyager, c’est découvrir</h2>
                                <h2>Voyager, à son meilleur</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Destination par type de voyages</h3>
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

<div id="fh5co-footcamp" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Nos Offres Football Camp</h3>
                </div>
            </div>
            <div class="row">
                @for($id=1;$id<4;$id++)
                    <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                        <div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <div class="desc">
                                <span></span>
                                <h3>Offre {{ $id }}</h3>
                                <span>3 Nuits</span>
                                <span class="price">1,200 TND</span>
                                <a class="btn btn-primary btn-outline" href="{{ route('footballcamp', $id) }}">Explorer<i class="icon-arrow-right22"></i></a>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-outline btn-lg" href="{{ route('footballcamps') }}">Tous les offres&nbsp;<i class="icon-arrow-right22"></i></a></p>
                </div>
            </div>

        </div>
    </div>
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
