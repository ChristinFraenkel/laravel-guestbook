@extends('layouts.base')

@section('title', 'Gästebuch')
@section('content')
<div class="container">
    <h1>Gästebuch</h1>
    <form method="GET" action="{{route('index', [], false)}}">
    </form>
</div>

@endsection