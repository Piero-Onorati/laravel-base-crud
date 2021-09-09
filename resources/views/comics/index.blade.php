@extends('layouts.app')
@section('title', 'Comics Table')

@section('content')

<div class="container pt-5">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td>{{$book->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('comics.show', $book->id)}}">Show</a>
                        <a class="btn btn-secondary" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
        {{$books->links()}}
    </div>
</div>
    
@endsection