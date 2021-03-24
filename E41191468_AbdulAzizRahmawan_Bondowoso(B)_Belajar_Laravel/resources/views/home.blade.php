<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan halaman home</p>
        </div>
        <p>Nama : {{$nama}}</p>
        <p>Matkul :</p>
        <ul>
            @foreach($matkul as $m)
            <li>{{$m}}</li>
            @endforeach
        </ul>
    </div>
@endsection
</body>
</html>