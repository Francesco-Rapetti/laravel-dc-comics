@extends('layouts.app')

@section('main')
    <div class="container my-5">
        <div class="row mb-5">
            <h2>Insert new comic</h2>
        </div>

        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="titleInput" class="form-label">Title</label>
                  <input type="text" class="form-control" id="titleInput" name="title">
                </div>

                <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Description</label>
                    <input type="text" class="form-control" id="descriptionInput" name="description">
                  </div>

                  <div class="mb-3">
                    <label for="thumbInput" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumbInput" name="thumb">
                  </div>

                  <div class="mb-3">
                    <label for="priceInput" class="form-label">Price</label>
                    <input type="text" class="form-control" id="priceInput" name="price">
                  </div>

                  <div class="mb-3">
                    <label for="seriesInput" class="form-label">Series</label>
                    <input type="text" class="form-control" id="seriesInput" name="series">
                  </div>

                  <div class="mb-3">
                    <label for="dateInput" class="form-label">Sale date</label>
                    <input type="text" class="form-control" id="dateInput" name="sale_date">
                  </div>

                  <div class="mb-3">
                    <label for="typeInput" class="form-label">Type</label>
                    <input type="text" class="form-control" id="typeInput" name="type">
                  </div>
                
                <button type="submit" class="btn btn-primary">Insert</button>
              </form>
        </div>
    </div>
@endSection