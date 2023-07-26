@extends('layout.mainLayout')

@section('title','home')

@section('content')
    <h1>ini adalah halaman home</h1>
    <h3>Halo, Welcome   {{Auth::user()->name}}. Anda adalah {{Auth::user()->role->name}}</h3>
@endsection