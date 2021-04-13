@extends('layout.layout')

@section('content')
    <br>
    <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Nos Offres Football Camp</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                @foreach($footballcamps as $footballcamp )
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                    <div href="#"><img src="{{ $footballcamp->thumbnail }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                        <div class="desc">
                            <span></span>
                            <h3>{{ $footballcamp->title }}</h3>
                            <span>{{ $footballcamp->begin_date }} -> {{ $footballcamp->end_date }}</span>
                            <span class="price">{{ $footballcamp->price }} TND</span>
                            <span style="font-weight: bold">{{ $footballcamp->destination }}</span>
                            <a class="btn btn-primary btn-outline" href="{{ route('footballcamp', $footballcamp->id) }}">Explorer<i class="icon-arrow-right22"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
