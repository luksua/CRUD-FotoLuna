@extends('layouts.app')

@section('title', 'Citas')

@php($noFooter = true)

@section('main-class', 'container py-5')

@if (Session::has('mensaje'))
    <div class="alert alert-success text-center mb-4">
        {{ Session::get('mensaje') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        
            <div class="card shadow border-0">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 bg-custom-2 py-5">
                        <h2 class="mb-4 text-center bg-custom-2">Citas</h2>
                    </div>
                </div>
            <div class="row bg-custom-9">
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-5">
                        <a href="{{ route('appointment.create') }}" class="btn custom-upload-btn">
                            <i class="bi bi-plus-circle"></i> Nueva Cita
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="thead-light bg-custom-2 text-white">
                                <tr>
                                    <th>N°</th>
                                    <th>Tipo de Evento</th>
                                    <th>Hora</th>
                                    <th>Fecha</th>
                                    <th>Lugar</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($citas as $cita)
                                    <tr>
                                        <td>{{ $cita->idCita }}</td>
                                        <td>{{ $cita->tipoEvento }}</td>
                                        <td>{{ $cita->HoraCita }}</td>
                                        <td>{{ $cita->fechaCita }}</td>
                                        <td>{{ $cita->lugar }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No hay citas registradas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $citas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>