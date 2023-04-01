@extends('layouts.app')

@section('title', $comic['title'])

@section('content')
    <section >
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    @include('partials._comic_card')
                </div>
            </div>
    </section>
@endsection 
