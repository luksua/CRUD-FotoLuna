<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $listado['event'] = Event::paginate(4);
        return view('event.index', $listado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosEvent = request()->except('_token');
        Event::insert($datosEvent);
        return redirect('event')->with('mensaje', 'Evento creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idEvento)
    {
        //
        $evento = Event::findOrFail($idEvento);
        return view('event.update', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idEvento)
    {
        //
        $datos = request()->except(['_token', '_method']);
        Event::where('idEvento', '=', $idEvento)->update($datos);

        $evento = Event::findOrFail($idEvento);
        return redirect('event')->with('mensaje', 'Evento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idEvento)
    {
        //
        Event::destroy($idEvento);
        return redirect('event')->with('mensaje', 'Evento eliminado con éxito');
    }
}
