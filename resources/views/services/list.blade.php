@extends('adminlte::page')

@section('title', 'E-diarista')

@section('content_header')
    <div class="d-flex justify-content-between align-items-cente">
        <h1 class="">Serviços</h1>
        <a href="{{route('services.create')}}" class="text-dark btn bg-success mr-1 ">
            Novo serviço <i class="fas fa-plus"></i>
        </a>
    </div>
@stop

@section('content')
    <table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($services as $service)
            <tr>
                <td>{{ $service->id}}</td>
                <td>{{ $service->nome}}</td>
                <td>
                    <a href="{{route('services.edit', [$service->id])}}" class="btn btn-info">Atualizar</a>
                </td>
            </tr>
        @empty
            <td></td>
            <td>Nenhum registro encontrado</td>
            <td></td>
        @endforelse
    </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $services->links()}}
    </div>
@stop

