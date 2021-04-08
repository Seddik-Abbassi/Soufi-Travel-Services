@extends('layout.layout')

@section('content')
    <br>
    <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated">
                    <h3>{{ $footballcamp->title  }}</h3>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 animate-box fadeInUp animated">
                    <h2 class="heading-title">{{ $footballcamp->destination }}</h2>
                </div>
                <div class="col-md-6 animate-box fadeInUp animated">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary">
                                <span class="badge bg-secondary">De</span>
                                {{ $footballcamp->begin_date }}
                            </button>
                            <button type="button" class="btn btn-primary">
                                <span class="badge bg-secondary">à</span>
                                {{ $footballcamp->end_date }}
                            </button>
                        </div>
                        <br><br><br><br>
                        <div class="col-md-12">
                            <p style="text-align: justify">{{ $footballcamp->description }}</p>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-success" style="font-size: 1.5em" >
                                {{ $footballcamp->price }} TND
                            </button>
                        </div>
                        <div class="col-md-12" style="margin-top: 15px">
                            <!-- Link to open the modal -->
                            <p><a href="#ex1" class="btn btn-primary" rel="modal:open">Réserver</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box fadeInUp animated">
                    <img class="img-responsive" src="{{ $footballcamp->thumbnail }}" alt="travel">
                </div>
                <div class="col-md-12 text-center animate-box" style="margin-top: 50px">
                    <p><a class="btn btn-primary btn-outline btn-lg" href="{{ route('footballcamps') }}">Tous les offres&nbsp;<i class="icon-arrow-right22"></i></a></p>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
        <p>Vous allez réserver <h3>{{ $footballcamp->title }}</h3></p>
        <button type="button" class="btn btn-primary">
            <span class="badge bg-secondary">De</span>
            {{ $footballcamp->begin_date }}
        </button>
        <button type="button" class="btn btn-primary">
            <span class="badge bg-secondary">à</span>
            {{ $footballcamp->end_date }}
        </button>
        <br><br><br>
        <button type="button" class="btn btn-success" style="font-size: 1.5em" >
            {{ $footballcamp->price }} TND
        </button>
        <br><br><br>
        <form class="row g-3" action="{{ url('booking') }}" method="POST">
            @csrf
            <div class="col-auto">
                <label for="name" class="visually-hidden">Nom Complet</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom Complet" required>
            </div>
            <div class="col-auto">
                <label for="email" class="visually-hidden">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <input type="hidden" name="offre" value="{{ $footballcamp->id }}">
            <br>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Réserver</button>
            </div>
        </form>
    </div>


@endsection
