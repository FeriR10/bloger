<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Travel;

use DataTables;
use Str;

class TravelController extends Controller
{
    public function index()
    {
        return view('pages.admin.travel.index');
    }

    public function create()
    {
        return view('pages.admin.travel.form', [
            'data' => null
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'harga' => 'required'
        ], [
            'judul.required' => 'Judul Harus diisi !',
            'deskripsi.required' => 'Deskripsi Harus diisi !',
            'harga.required' => 'Harga Harus diisi !',
            'harga.integer' => 'Harga Harus berupa Angka !'
        ]);

        $store = Travel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => $this->getAmount($request->harga)
        ]);

        if ($store) {
            return redirect()->route('admin.travel')->with('success', 'Data '.$request->judul.' berhasil ditambahkan !');
        }

        return redirect()->back()->with('error', 'Data gagal ditambah !');
    }

    public function edit($id, Travel $travel)
    {
        $data = $travel->find($id);
        
        if (empty($data)) {
            return abort(404);
        }
        return view('pages.admin.travel.form', [
            'data' => $data
        ]);
    }

    public function show($id)
    {
        $data = Travel::withTrashed()->findOrFail($id);
        return view('pages.admin.travel.detail', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        

        $this->validate($request, [
            'judul' => 'required|string',
            'deskripsi' => 'required',
            'harga' => 'required'
        ], [
            'judul.required' => 'Judul Harus diisi !',
            'deskripsi.required' => 'Deskripsi Harus diisi !',
            'harga.required' => 'Harga Harus diisi !',
            'harga.integer' => 'Harga Harus berupa Angka !'
        ]);

        $travel = Travel::findOrFail($id);
        $update = $travel->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => $this->getAmount($request->harga)
        ]);

        if ($update) {
            return redirect()->route('admin.travel')->with('success', 'Data '.$request->judul.' berhasil diupdate !');
        }

        return redirect()->back()->with('error', 'Data gagal diupdate !');
    }

    public function destroy()
    {
        
    }

    public function delete($id)
    {
        $travel = Travel::findOrFail($id);
        $delete = $travel->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Data '.$travel->judul.' Berhasil dihapus !');
        }

        return redirect()->back()->with('error', 'Data '.$travel->judul.' Gagal dihapus !');
    }

    public function data()
    {
        $travel = Travel::get();
        return DataTables::of($travel)->addColumn('deskripsi', function($row)
        {
            return Str::limit($row->deskripsi, 20, '...');
        })->addIndexColumn()->make(true);
    }

    public function getAmount($money)
    {
        $number = preg_replace('/[^0-9]/','',$money);
        return substr($number, 0, -2);
    }
}
