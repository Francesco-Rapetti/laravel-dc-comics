@extends('layouts.app')

@section('main')
    <div class="wrapper">
        <div class="container">
            <div class="row my-5 justify-content-center">
                <div class="col-12 col-md-6 w-25 square-card me-3">
                    <img class="w-100" src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h1 class="mt-3">{{$comic['title']}}</h1>
                    <div>
                        <h5>SERIE</h5>
                        <p>{{ $comic['series'] }}</p>

                        <h5>DESCRIZIONE</h5>
                        <p>{{ $comic['description'] }}</p>

                        <h5>DATA DI USCITA</h5>
                        <p>{{ $comic['sale_date'] }}</p>

                        <h5>PREZZO</h5>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="d-flex justify-content-center mb-4">
        <button class="btn btn-primary rounded-0 fw-bold">LOAD MORE</button>
    </div>
@endsection