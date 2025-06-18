<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasienController extends Controller
{
    private $baseUrl = "http://localhost:8080/pasien";

    public function index()
    {
        $response = Http::get($this->baseUrl);
        $data = $response->json();

        return view('pasien.index', ['pasien' => $data]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        Http::post($this->baseUrl, $data);

        return redirect('/pasien')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $response = Http::get($this->baseUrl . '/' . $id);
        $data = $response->json();

        return view('pasien.edit', ['pasien' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token', '_method');
        Http::put($this->baseUrl . '/' . $id, $data);

        return redirect('/pasien')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Http::delete($this->baseUrl . '/' . $id);
        return redirect('/pasien')->with('success', 'Data berhasil dihapus!');
    }
}
