<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <a href="{{ route('movie-detail', ['id' =>$movie->id]) }}" class="btn btn-primary">Details</a>
    </div>
  </div>  