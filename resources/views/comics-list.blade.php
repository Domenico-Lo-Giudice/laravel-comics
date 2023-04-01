@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
    <section >
        <div class="container">
            @dump($comics)
        </div>
    </section>
@endsection 
