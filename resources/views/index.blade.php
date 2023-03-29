@extends('layouts.app')

@section('page_name', 'homepage')

@section('main_content')

<div class="container">
  <h1 class="text-center p-3">Movie list</h1>
    <div class="row">
      @foreach ($movies as $movie)
        <div class="col-4 g-3">
              @include('partials._card_movie')
          </div>    
        @endforeach
    </div>    
</div>    
@endsection