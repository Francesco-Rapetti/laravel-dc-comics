@extends('layouts.app')

@section('main')
    <div class="container my-5">
        <div class="row mb-5">
            <h2>Edit {{ $comic['title'] }}</h2>
        </div>

        <div class="row">
            <form action="{{ route('comics.update', $comic['id']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="titleInput" class="form-label">Title</label>
                  <input type="text" class="form-control" id="titleInput" name="title" value="{{ $comic['title']}}">
                </div>

                <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Description</label>
                    <input type="text" class="form-control" id="descriptionInput" name="description" value="{{ $comic['description']}}">
                  </div>

                  <div class="mb-3">
                    <label for="thumbInput" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumbInput" name="thumb" value="{{ $comic['thumb']}}">
                  </div>

                  <div class="mb-3">
                    <label for="priceInput" class="form-label">Price</label>
                    <input type="text" class="form-control" id="priceInput" name="price" value="{{ $comic['price']}}">
                  </div>

                  <div class="mb-3">
                    <label for="seriesInput" class="form-label">Series</label>
                    <input type="text" class="form-control" id="seriesInput" name="series" value="{{ $comic['series']}}">
                  </div>

                  <div class="mb-3">
                    <label for="dateInput" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="dateInput" name="sale_date" value="{{ $comic['sale_date']}}">
                  </div>

                  <div class="mb-3">
                    <label for="typeInput" class="form-label">Type</label>
                    <input type="text" class="form-control" id="typeInput" name="type" value="{{ $comic['type']}}">
                  </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
@endSection