<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('correoCliente', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {
            // Autenticado como cliente
            return redirect()->intended('/customer/home');
        }
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function register(Request $request)
    {
        // Valida los datos 
        $request->validate([
            'nombreCliente' => 'required|string|max:255',
            'apellidoCliente' => 'required|string|max:255',
            'fotoCliente' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'correoCliente' => 'required|string|email|max:255|unique:customers,correoCliente',
            'password' => 'required|string|min:6|confirmed',
            'telefonoCliente' => 'required|string|max:255',
            'tipoDocCliente' => 'required|in:CC,CE,PAS',
            'numeroDocCliente' => 'required|string|max:255|unique:customers,numeroDocCliente',
        ]);

        if ($request->hasFile('fotoCliente')) {
            $file = $request->file('fotoCliente');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('clientes', $filename, 'public');
        } else {
            $path = null;
        }

        // Crea el cliente
        $customer = Customer::create([
            'nombreCliente' => $request->nombreCliente,
            'apellidoCliente' => $request->apellidoCliente,
            'fotoCliente' => $path,
            'correoCliente' => $request->correoCliente,
            'password' => bcrypt($request->password),
            'telefonoCliente' => $request->telefonoCliente,
            'tipoDocCliente' => $request->tipoDocCliente,
            'numeroDocCliente' => $request->numeroDocCliente,
        ]);

        // Autentica al cliente
        Auth::guard('customer')->login($customer);

        return redirect('/');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
