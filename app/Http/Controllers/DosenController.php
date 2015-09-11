<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    
    public function index()
    {
        $dosen = Dosen::all();

        return view('dosen.index')->with('dosen', $dosen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return ('dosen.add');
    }

    public function addData(Request $request)
    {
        $this->validete($request, [
            'name'   => 'required|min:2',
            'addres' => 'required|min:5',
            'phone'  => 'required|min11',
            'email'  => 'requires|min5',

        ]);
        return redirect()
        ->route('dosen')
        ->with('info', 'Data Berhasil Di simpan..!');

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
