@extends('adminlte::page')

@section('title', 'E-diarista')

@section('content_header')
    <h1>Novo Serviço</h1>
@stop

@section('content')
    <form action="{{ route('services.store')}}" method="post">
        @csrf
        @include("services._forms")
    </form>
@stop
