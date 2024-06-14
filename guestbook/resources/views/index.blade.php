@extends('layouts.base')

@section('title', 'Gästebuch')
@section('content')
<div class="container">
    <h1>Gästebuch</h1>
    @if($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) 
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <form method="POST" action="{{route('index', [], false)}}">
        @csrf
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="text" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" name="username" id="inputUsername">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputSubtitle" class="form-label">Subtitle</label>
            <input type="text" value="{{old('subtitle')}}" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" id="inputSubtitle">
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Body</label>
            <textarea id="inputBody" class="form-control @error('body') is-invalid @enderror" name="body">{{old('body')}}</textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Speichern</button>
    </form>
</div>

@endsection