@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section >
        <div class="container">
            @dump($comics)
        </div>
    </section>
@endsection 
