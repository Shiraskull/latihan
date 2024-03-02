<?php

namespace App\Http\Controllers;

use App\Models\tpasien;
use Illuminate\Http\Request;

class pasiencontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tpasien', ["data" => tpasien::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formpasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        function generateUniqueCode()
        {
            $latestPS = tpasien::latest()->first(); // Get the latest record
            if ($latestPS) {
                $nextNumericPart = (int) substr($latestPS->Kode_Peserta, 3) + 1;
            } else {
                $nextNumericPart = 1; // If no record exists, start with 1
            }
            $nextPSID = 'PS-' . str_pad($nextNumericPart, 3, '0', STR_PAD_LEFT); // Format the next ID
            return $nextPSID;
        }
        //dd($request->pasien_nama);
        $data = [
            "pasien_nama" => $request->pasien_nama,
            "jenis_kelamin" => $request->jenis
        ];
        tpasien::create($data);
        return redirect()->to('pasien');
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

        return view('formeditpasien', ["data" => tpasien::where('id', $id)->first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            "pasien_nama" => $request->pasien_nama,
            "jenis_kelamin" => $request->jenis
        ];
        tpasien::where('id', $id)->update($data);
        return redirect()->to('pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        tpasien::where('id', $id)->delete();
        return redirect()->to('pasien');
    }
}
