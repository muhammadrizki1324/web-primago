<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santri = Santri::all();
        return view('Santri.show', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "nipd" => 'required',
            "nama" => 'required',
            "jk"=> 'required',
            "telp"=> 'required',
            "alamat"=>'required',
        ]);

        Santri::create ([
            "nipd" => $request->nipd,
            "nama" => $request->nama,
            "jk"=> $request->jk,
            "telp"=> $request->telp,
            "alamat"=>$request->alamat,
        ]);

        return redirect('/Santri')->with('success','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $santri = Santri::findorfail($id);
        return view('Santri.edit',compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "nipd" => 'required',
            "nama" => 'required',
            "jk"=> 'required',
            "telp"=> 'required',
            "alamat"=>'required',
        ]);

        $santri = Santri::findorfail($id);
        $santri->update($request->all());
        return redirect('/Santri')->with('success','Data Berhasil Di Edit');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::findorfail($id);
        $santri->delete();
        return back()->with('destroy','Data Berhasil Di Destroy');
    }
}
