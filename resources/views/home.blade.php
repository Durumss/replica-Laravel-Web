@extends('layouts.app')

@section('title', 'ADICAE')

@section('content')

    @include('home.hero')
    @include('home.webs')
    @include('home.casos')
    @include('home.publicaciones')
    @include('home.videos')
    @include('home.footer-logos')

@endsection