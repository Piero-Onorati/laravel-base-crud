@extends('layouts.app')
@section('title', 'Add new Comics')


@section('content')

<div class="container">
    
    <form action="{{route('comics.store')}}" method="post" class="g-3 py-5">

        {{-- Token --}}
        @csrf

        {{-- Title --}}
        <div class="mb-3 col-10">
            <label for="comic_title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="comic_title">
        </div>

        {{-- Description --}}
        <div class="mb-3 col-10">
            <label for="comic_description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="comic_description" rows="3"></textarea>
        </div>

        {{-- Thumb --}}
        <div class="mb-3 col-10">
            <label for="comic_img" class="form-label">Image</label>
            <input type="text" name="thumb" class="form-control" id="comic_img">
        </div>

        {{-- Price --}}
        <div class="mb-3 col-10">
            <label for="comic_price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="comic_price">
        </div>

        {{-- Series --}}
        <div class="mb-3 col-10">
            <label for="comic_serie" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="comic_serie">
        </div>

        {{-- Sale_date --}}
        <div class="mb-3 col-10">
            <label for="comic_sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" class="form-control" id="comic_sale_date">
        </div>

        {{-- Type --}}
        <div class="mb-3 col-10">
            <label for="comic_type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="comic_type">
        </div>

      
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>
    
@endsection