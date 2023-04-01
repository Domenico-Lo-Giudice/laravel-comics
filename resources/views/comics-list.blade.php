@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
    <section >
        <div class="container">
            <div class="row g-3">

                @forelse($comics as $comic_key => $comic)
                <div class="col-3">
                   @include('partials._comic_card')
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
