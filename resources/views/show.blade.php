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
    <div class="d-flex justify-content-center mb-4 gap-3">
        <a class="btn btn-primary rounded-0 fw-bold" href="{{ route('comics.index') }}">ALL COMICS</a>
        <a class="btn btn-warning rounded-0 fw-bold" href="{{ route('comics.edit', $comic['id']) }}">EDIT</a>
        <form action="{{ route('comics.destroy', $comic['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger rounded-0 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
            DELETE
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-dark rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="warningTitle">WARNING</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete {{ $comic['title'] }}?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0 fw-bold" data-bs-dismiss="modal">DISCARD</button>
                        <input id="deleteBtn" class="btn btn-danger rounded-0 fw-bold" type="submit" value="DELETE">
                    </div>
                </div>
            </div>
        </div>
        </form>
        
    </div>
@endsection