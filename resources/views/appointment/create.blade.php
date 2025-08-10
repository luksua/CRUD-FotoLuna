@extends('layouts.app')

@section('title', 'Citas')

@php($noFooter = true)

@section('main-class', 'container-fluid py-4')
<div class="form-section">
    <div class="row bg-custom-9">
        <h2 class="mb-4 text-center bg-custom-2">Citas</h2>
        <div class="col-lg-6 col-md-6 col-sm-12 py-5 ps-lg-5">

            <form method="POST" action="{{ route('appointment.store') }}" id="formCita">
                @csrf
                @include('appointment.form')
            </form>
        </div>
        <div class="col-lg-6 col-md-6 d-none d-md-block">
            <img src="{{ asset('image/fotoi.jpg') }}" alt="Imagen de perfil" class="img-fluid rounded">
        </div>
    </div>
</div>