<?php

namespace App\Http\Controllers;

use App\Models\bukuhutang;
use Illuminate\Http\Request;

class bukuhutangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = bukuhutang::all()->sortBy('nama');

        return view('bukuhutang/bukucatatanhutang', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukuhutang/add-bukuhutang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required|numeric',
            'no_telfon'=> 'required|numeric',
            'jumlah_hutang' => 'required|numeric',
        ],
        [
            'nama.required' => 'nama wajib diisi',
            'alamat.required' => 'alamat wajib diisi',
            'umur.required' => 'umur wajib diisi',
            'umur.numeric' => 'umur wajib berisi angka',
            'no_telfon.required' => 'nomer telfon wajib diisi',
            'no_telfon.numeric' => 'nomer telfon wajib berisi angka',
            'jumlah_hutang.required' => 'jumlah hutang wajib diisi',
            'jumlah_hutang.numeric' => 'jumlah hutang wajib berisi angka',
        ]
        );

        $data_bukuhutang = $request->all();

        bukuhutang::create($data_bukuhutang);

        return redirect('bukuhutang/create')->with('info', 'Tambah Data Hutang berhasil');
        
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
        $data = bukuhutang::where('id', $id)->first();
        return view('bukuhutang/edit-bukuhutang')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
                'umur' => 'required|numeric',
                'no_telfon'=> 'required|numeric',
                'jumlah_hutang' => 'required|numeric',
            ],
            [
                'nama.required' => 'nama wajib diisi',
                'alamat.required' => 'alamat wajib diisi',
                'umur.required' => 'umur wajib diisi',
                'umur.numeric' => 'umur wajib berisi angka',
                'no_telfon.required' => 'nomer telfon wajib diisi',
                'no_telfon.numeric' => 'nomer telfon wajib berisi angka',
                'jumlah_hutang.required' => 'jumlah hutang wajib diisi',
                'jumlah_hutang.numeric' => 'jumlah hutang wajib berisi angka',
            ]
            );  

            $dataEdit = [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'umur' => $request->umur,
                'no_telfon' => $request->no_telfon,
                'jumlah_hutang' => $request->jumlah_hutang,
            ];

            bukuhutang::where('id', $id)->update($dataEdit);

            return redirect('bukuhutang')->with('info', 'Edit Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        bukuhutang::where('id',$id)->delete();
            return redirect('/bukuhutang')->with('info',"hapus data berhasil");
    }
}
