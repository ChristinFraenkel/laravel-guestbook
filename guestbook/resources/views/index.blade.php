@extends('layouts.base')

@section('title', 'Gästebuch')
@section('content')
<div class="container">
    <h1>Gästebuch</h1>
    <form method="GET" action="{{route('index', [], false)}}">
        @csrf
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="inputUsername">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputSubtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" id="inputSubtitle">
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Body</label>
            <textarea id="inputBody" class="form-control" id="inputBody"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Speichern</button>
    </form>
</div>

@endsection