<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //URL general
        $url = env('URL_SERVER_API', '127.0.0.1');
        $response = Http::get($url.'/clients');
        $data = $response->json();
        return view('clientes', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API', '127.0.0.1');
        $response = Http::post($url.'/clients', [
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'address'  => $request->address
        ]);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $url = env('URL_SERVER_API', '127.0.0.1');
        $response = Http::get($url.'/clients/'.$id);
        $data = $response->json();
        return view('clienteView', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', '127.0.0.1');
        $response = Http::put($url.'/clients/'.$request->id, [
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'address'  => $request->address
        ]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hacer una petición al SERVER API para que elimine el registro
        $url = env('URL_SERVER_API', '127.0.0.1');
        $response = Http::delete($url.'/clients/'.$id);
        return redirect()->route('clientes.index');
    }
}
