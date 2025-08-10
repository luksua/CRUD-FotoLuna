@extends('layouts.app')

@section('title', 'Citas')

@php($noFooter = true)

@section('main-class', 'container py-5')


<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow border-0">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 py-5">
                    <h2 class="mb-4 text-center bg-custom-2 display-5">Citas</h2>
                </div>
            </div>
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible text-center mb-4" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
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
                                    <th>Accion</th>
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
                                        <td>
                                            <a href="{{ url('/appointment/'.$cita->idCita.'/edit') }}" class="btn custom-upload-btn"> Editar </a>  |

                                            <form action="{{ url('/appointment/'.$cita->idCita) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" onclick="return confirm('¿Deseas eliminar esta cita?')" class="btn custom2-upload-btn" value="Eliminar">
                                            </form>

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
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {!! $citas->links() !!}
            </div>
        </div>
    </div>
</div>