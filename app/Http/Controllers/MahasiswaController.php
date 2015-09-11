<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    
    public function index()
    {
       $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('mahasiswa.add');
    }

    public function addData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'addres' => 'required',
            'email' => 'required',
            'phone' => 'required|min:11',
        ]);

        Mahasiswa::create([
            'name' => $request->input('name'),
            'addres' => $request->input('addres'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);
        return redirect()
            ->route('mahasiswa')
            ->with('info', 'data berhasil disimpan... !');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
