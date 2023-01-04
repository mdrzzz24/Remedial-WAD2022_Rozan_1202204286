<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function karyawan(){
        $karyawan = Karyawan::all();
        return view('index',compact(['karyawan']));
    }
    public function create()
    {
        return view('inputdata');
    }
    public function store(Request $request)
    {
        Karyawan::create($request->except(['_token','submit']));
        return redirect('/');
    }
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('updatedata',compact(['karyawan']));
    }
    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->except(['_token','submit']));
        return redirect('/');
    }
    public function delete($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/');
    }
}
