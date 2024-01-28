@extends('layouts.app')

@section('main')
    <div class="wrapper">
        <div id="card-container" class="">
            @foreach ($comics as $comic)
            <div class="d-flex my-5">
                <div class="square-card me-3 w-25">
                    <img class="w-100" src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="w-75">
                    <h1 class="mt-3">{{$comic['series']}}</h1>
                    <div>
                        @foreach ($comic as $key => $value)
                            @if ($loop->first)
                                
                            @else 
                                <h5>{{ $key }}</h5>
                                <p>{{ $value }}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>  
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mb-4">
        <button class="btn btn-primary rounded-0 fw-bold">LOAD MORE</button>
    </div>

    <style>
        * {
            color: white;
        }
    
        .square-card {
            overflow: hidden;
            cursor: pointer;
        }
        
        h5 {
            width: 200px;
        }
        
        .section-title {
            background-color: #0282F9;
            padding: 12px 30px;
            font-weight: 700;
            font-size: 1.8rem;
            position: relative;
            top: 318px;
        }
        
        .btn {
            padding: 10px 70px;
        }
        
        #jumbo {
            height: 400px;
            background-image: url(/images/jumbotron.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .wrapper {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        
        #card-container {
            gap: 30px;
        }
    </style>
@endsection