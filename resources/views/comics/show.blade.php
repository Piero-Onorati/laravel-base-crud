@extends('layouts.app')
@section('title', 'Comics Details')

@section('content')

<div class="container">
    <div class="card my-5">
        <div class="row g-0">
          <div class="col-2">
            <img src="{{$book->thumb}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-7">
            <div class="card-body">
              <h4 class="card-title">{{$book->title}}</h4>
              <p class="card-text pt-3">{{$book->description}}</p>
            </div>
          </div>
          <div class="col-3">
            <ul class="list-group list-group-flush pt-4">
                <li class="list-group-item"><span class="badge bg-dark">TYPE:</span> {{$book->type}}</li>
                <li class="list-group-item"><span class="badge bg-dark">SERIES:</span> {{$book->series}}</li>
                <li class="list-group-item"><span class="badge bg-dark">DATE SALE:</span> {{$book->sale_date}} </li>
                <li class="list-group-item"><span class="badge bg-dark">PRICE:</span> {{$book->price}} $</li>
              </ul>
          </div>
        </div>
    </div>  

    <button class="btn btn-secondary"><a class="link-light" href="{{route('comics.index')}}">Back to product list</a></button>
</div>


@endsection