<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PasienController extends Controller
{
    protected $endpoint = 'http://localhost:8080/pasien';

    public function index()
{
    $response = Http::get('http://localhost:8080/pasien');
    $json = $response->json();

    $pasien = $json['data'] ?? []; // ambil hanya bagian data obat

    return view('pasien.index', compact('pasien'));
}

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        Http::post($this->endpoint, $request->all());
        return redirect()->route('pasien.index');
    }

    public function edit($id)
{
    $response = Http::get("{$this->endpoint}/{$id}");
    $json = $response->json();

    $pasien = $json['data'] ?? [];

    return view('pasien.edit', compact('pasien'));
}


    public function update(Request $request, $id)
    {
        Http::put("{$this->endpoint}/{$id}", $request->all());
        return redirect()->route('pasien.index');
    }
    public function destroy($id)
    {
        Http::delete("{$this->endpoint}/{$id}");
        return redirect()->route('pasien.index');
    }
}