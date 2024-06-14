@extends('layouts.base')

@section('title', 'Gästebuch')
@section('content')
<div class="container">
    <h1>Gästebuch</h1>
    @include('errors')
    @include('flashmessage')
    @include('form')

    @foreach($entries as $entry)
        @include('entry')
    @endforeach

   @include('pagination')
</div>

@endsection