@extends('layouts.app')

@section('main')
    <div class="container my-5">
        <div class="row mb-5">
            <h2>Insert new comic</h2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <form class="needs-validation" action="{{ route('comics.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Title</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('title') is-invalid @enderror"
                        id="titleInput" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descriptionInput" class="form-label">Description</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('description') is-invalid @enderror"
                        id="descriptionInput" name="description" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumbInput" class="form-label">Thumb</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('thumb') is-invalid @enderror"
                        id="thumbInput" name="thumb" value="{{ old('thumb') }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="priceInput" class="form-label">Price</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('price') is-invalid @enderror"
                        id="priceInput" name="price" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="seriesInput" class="form-label">Series</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('series') is-invalid @enderror"
                        id="seriesInput" name="series" value="{{ old('series') }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="dateInput" class="form-label">Sale date</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('sale_date') is-invalid @enderror"
                        id="dateInput" placeholder="YYYY-MM-DD" name="sale_date" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="typeInput" class="form-label">Type</label>
                    <input type="text"
                        class="form-control @if ($errors->any()) is-valid @endif @error('type') is-invalid @enderror"
                        id="typeInput" name="type" value="{{ old('type') }}">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>
    </div>
@endSection
