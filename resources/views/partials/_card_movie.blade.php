<div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted"> {{ $movie->original_title }} </h6>
      <h6 class="card-subtitle mb-2"> {{ $movie->nationality }} </h6>
      <h6 class="card-subtitle mb-2"> {{ $movie->date }} </h6>
      <h6 class="card-subtitle mb-2">Vote: {{ $movie->vote }} </h6>
    </div>
  </div>  