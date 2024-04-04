<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function getCollections(){
        $collections = DB::table('collections')
        ->select(
            'namaKoleksi',
            'jenisKoleksi',
            'jumlahKoleksi',
        )
        ->orderBy('namaKoleksi', 'ASC')
        ->get();
        return response()->json($collections, 200);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koleksi.daftarKoleksi', ['collection' => Collection::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaKoleksi' => 'string',
            'jenisKoleksi' => 'integer',
            'jumlahKoleksi' => 'integer',
        ]);

        Collection::create($validatedData);
        return redirect('/koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', compact('collection'));
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
