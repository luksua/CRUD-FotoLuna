@extends('layouts.app')
@section('title', 'Eventos')
@php($noFooter = true)
@section('main-class', 'container py-5')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow border-0">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 py-5">
                    <h2 class="mb-4 text-center bg-custom-2 display-5">Eventos</h2>
                </div>
            </div>

            <div class="alert alert-success alert-dismissible text-center mb-4" role="alert">
                @if (Session::has('mensaje'))
                    {{ Session::get('mensaje') }}
                @endif
            </div>

            <div class="row bg-custom-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-5">
                        <a href="{{ route('event.create') }}" class="btn custom-upload-btn">
                            <i class="bi bi-plus-circle"></i> Nuevo Evento
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="thead-light bg-custom-2 text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo de Evento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($event as $datos)
                                <tr>
                                    <td>{{ $datos->idEvento}}</td>
                                    <td>{{ $datos->tipoEvento}}</td>
                                    <td>
                                        <a href="{{ url('/event/' . $datos->idEvento . '/edit') }}"
                                            class="btn custom-upload-btn d-inline"> Editar </a> |
                                            <form action="{{ url('/event/' . $datos->idEvento) }}" method="post" class="d-inline">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" onclick="return confirm('¿Borrar?')" value="Borrar"
                                                    class="btn custom2-upload-btn">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No hay eventos registrados.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>