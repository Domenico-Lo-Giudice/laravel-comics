@if(isset($comic))
<div class="card h-100 " >
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{ $comic['title'] }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $comic['series']}}</h6>
      <p class="card-text">{{ $comic['sale_date']}}</p>
      @if(isset($comic_key))
      <a href="{{ route('comic-detail', ['index' => $comic_key]) }}" class="card-link mt-auto">Vai al dettaglio</a>
        @endif
    </div>
  </div>
  @else


  <div class="card h-100">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">Comic bot found</h5>
      
    </div>
  </div>
  @endif