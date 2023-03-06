@extends('layouts.main')

@section('title', 'Edit Card')

@section('content')
<section id="card-edit" class="container">
    <h3>Add your Card</h3>
    {{-- RETURN TO INDEX CARDS --}}
    <a class="btn btn-secondary my-3" href="{{ route('cards.index')}}">Back</a>
    
    @include('includes.cards.form')
</section>




@endsection