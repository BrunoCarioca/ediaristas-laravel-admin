@extends('adminlte::page')

@section('title', 'E-diarista')

@section('content_header')
 <h1>Editar Serviço</h1>
@stop

@section('content')
<form action="{{route('services.update', [$service->id])}}" method="post">
    @csrf
    @method('PUT')
    @include("services._forms")
</form>
@stop
