<?php

namespace App\Http\Controllers;

use App\Models\budibuku;
use Illuminate\Http\Request;

class BudiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $budibuku = budibuku::all();
        return view('budibuku.index',compact(['budibuku']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('budibuku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        budibuku::create($request->except(['_token','submit']));
        return redirect('/budibuku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Budi_Buku $budi_Buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($IDBuku)
    {
        
        $budibuku = budibuku::find($IDBuku);
        return view('budibuku.edit',compact(['budibuku']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($IDBuku,Request $request)
    {
        $budibuku = budibuku::find($IDBuku);
        $budibuku->update($request->except(['_token','submit']));
        return redirect('/budibuku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($IDBuku)
    {
        $budibuku = budibuku::find($IDBuku);
        $budibuku->delete();
        return redirect('/budibuku');
    }
}
