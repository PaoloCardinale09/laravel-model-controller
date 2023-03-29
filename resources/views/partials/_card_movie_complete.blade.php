<div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Original title: {{ $movie->original_title }} </h6>
      <h6 class="card-subtitle mb-2">Nationality: {{ $movie->nationality }} </h6>
      <h6 class="card-subtitle mb-2">Release date: {{ $movie->date }} </h6>
      <h6 class="card-subtitle mb-2">Vote: {{ $movie->vote }} </h6>
      <a href="{{ route('index', ['id' =>$movie->id]) }}" class="btn btn-primary">Go back</a>
    </div>
  </div>  