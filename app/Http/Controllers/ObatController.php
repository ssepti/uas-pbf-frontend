<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObatController extends Controller
{
    protected $endpoint = 'http://localhost:8080/obat';

    public function index()
    {
        $response = Http::get($this->endpoint);
        $json = $response->json();

        $obat = $json['data'] ?? []; // Ambil hanya bagian data
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        Http::post($this->endpoint, $request->all());
        return redirect()->route('obat.index');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->endpoint}/{$id}");
        $json = $response->json();
        $obat = $json['data'] ?? []; // Ambil hanya bagian data

        return view('obat.edit', compact('obat')); // kirim sebagai 'obat'
    }

    public function update(Request $request, $id)
    {
        Http::put("{$this->endpoint}/{$id}", $request->all());
        return redirect()->route('obat.index');
    }

    public function destroy($id)
    {
        Http::delete("{$this->endpoint}/{$id}");
        return redirect()->route('obat.index');
    }
}
