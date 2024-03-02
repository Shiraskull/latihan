<?php

namespace App\Http\Controllers;

use App\Models\tperiksa;
use Illuminate\Http\Request;

class periksacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $data = tperiksa::all();
        return view('tperiksa',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
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
