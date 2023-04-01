@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
    <section >
        <div class="container">
            <div class="row gap-3">

                @forelse($comics as $comic)
                <div class="col-3">
                    <div class="card h-100 " >
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">{{ $comic['title'] }}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{ $comic['series']}}</h6>
                          <p class="card-text">{{ $comic['sale_date']}}</p>
                          <a href="#" class="card-link mt-auto">Vai al dettaglio</a>
                        </div>
                      </div>
                </div>
                @empty
                <div class="col-12">
                    <h2>Nessun comic nella lista</h2>
                </div>
    
                @endforelse
            </div>
        </div>
    </section>
@endsection 
