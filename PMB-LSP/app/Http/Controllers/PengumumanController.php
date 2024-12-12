<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataPengumumanController;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Pengumuman::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '
                    <div class="flex space-x-2">
                        <button onclick="openModal(' . $row->id . ')" 
                            class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-md">
                            Action Pengumuman
                        </button>
                    </div>
                ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }

        return view('frontend.pengumuman.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DataPengumumanController $request)
    {
        $data = $request->validated();

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('images', $filename, 'public'); // Simpan di storage/app/public/images
            $data['image'] = $filename; // Hanya simpan nama file di database
        }
        

        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
