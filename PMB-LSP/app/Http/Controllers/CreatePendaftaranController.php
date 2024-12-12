<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DataPendaftaranRequest;
use App\Models\Pendaftaran;
class CreatePendaftaranController extends Controller
{
    public function create($jalur=null)
    {
        return view('frontend.pendaftaran.create', compact('jalur'));
    }

    public function store(DataPendaftaranRequest $request)
    {
        Pendaftaran::create(array_merge($request->validated(), [
            'user_id' => auth()->id(),
            'status' => 'Seleksi Berkas',
        ]));
        return redirect()->route('dashboard')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
