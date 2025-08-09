<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $citas = DB::table('appointments')
            ->join('events', 'appointments.idEventoFK', '=', 'events.idEvento')
            ->select(
                'appointments.*',
                'events.tipoEvento' 
            )
            ->paginate(10); // <-- paginación

        return view('appointment.index', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //acceder a la vista create.blade.php
        //traer el listado de eventos desde la bd 
        $eventos = Event::all();
        return view('appointment.create', ['eventos' => $eventos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // este es el metodo que recibe los datos del formulario
        $data = $request->except('_token');
        $data['idClienteFK'] = auth('customer')->user()->idCliente;

        // Crea la cita
        $appointment = Appointment::create($data);

        // Redirige o responde según tu necesidad
        return redirect()->route('appointment.index')->with('success', 'Cita creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
