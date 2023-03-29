@extends('layouts.app')

@section('page_name', 'homepage')

@section('main_content')

<div class="container">
    <div class="row">
      @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card"">
              <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{ $movie->original_title }} </h6>
                <h6 class="card-subtitle mb-2"> {{ $movie->nationality }} </h6>
                <h6 class="card-subtitle mb-2"> {{ $movie->date }} </h6>
                <h6 class="card-subtitle mb-2"> {{ $movie->vote }} </h6>

              </div>
            </div>    
          </div>    
        @endforeach
    </div>    
</div>    
@endsection