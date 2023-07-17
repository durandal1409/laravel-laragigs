@extends('layout')
@section('content')
@include('partials._search')

    <x-card>
        <h2>{{$listing['title']}}</h2>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p>{{$listing['description']}}</p>
    </x-card>

@endsection