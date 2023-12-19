<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class AdminKatsubController extends Controller
{
    public function show()
    {
        $sub = Sub_Category::orderBy('id')->get();
        $sub2 = Sub_Category::with('rCategory')->get();
        $cat = Category::orderBy('id')->get();
        $cat2 = Category::orderBy('id')->first();
        return view('admin.kategori&sub kategori.katsub_show', compact('sub', 'sub2', 'cat', 'cat2'));
    }

    public function store_kategori(Request $request)
    {
        $request->validate([
            'company' => 'required'
        ]);
        $store = new Category();
        $store->category = $request->company;
        $store->save();
        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }

    public function store_sub_kategori(Request $request)
    {
        $request->validate([
            'pilih_kategori' => 'required'
        ]);
        $store = new Sub_Category();
        $store->sub_category = $request->talent;
        $store->id_category = $request->pilih_kategori;
        $store->save();
        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }

    public function edit_kategori($id)
    {
        $edit = Category::find($id);
        return response()->json($edit);
    }

    public function update_kategori(Request $request, $id)
    {
        $update = Category::where('id', $id)->first();
        $update->category = $request->edit_company;
        $update->update();

        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }

    public function delete_kategori($id)
    {
        $del = Category::where('id', $id)->first()->delete();
        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }

    public function edit_sub_kategori($id)
    {
        $edit = Sub_Category::with('rCategory')->find($id);
        // dd($edit);   
        return response()->json($edit);
    }

    public function update_sub_kategori(Request $request, $id)
    {
        $update = Sub_Category::where('id', $id)->first();
        $update->sub_category = $request->talent;
        $update->id_category = $request->pilih_kategori;
        $update->update();

        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }

    public function delete_sub_kategori($id)
    {
        Sub_Category::where('id', $id)->first()->delete();
        return redirect()->route('admin_katsub_show')->with('success', 'data berhasil ditambahkan');
    }
}
