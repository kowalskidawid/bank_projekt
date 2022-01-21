@extends('layout.master')

@section('content')
    <h2>Witaj <b>{{ \Illuminate\Support\Facades\Auth::user()->login }}</b>!</h2>
@endsection
