<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function show()
    {
        $post = Post::with('rCategory')->with('rSubCategory')->get();
        return view('admin.post.post_show', compact('post'));
    }

    public function create()
    {
        $sub_kategori = Sub_Category::with('rCategory')->get();
        // dd($sub_kategori);
        return view('admin.post.post_create', compact('sub_kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:png,jpg,jpeg',
            'desc' => 'required'
        ]);
        $now = time();
        $ext = $request->file('photo')->extension();
        $final = 'manga_' . $now . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/img/'), $final);

        $store = new Post();
        $store->image = $final;
        $store->title  = $request->title;
        $store->desc  = $request->desc;
        $store->id_category = $request->kategori;
        $store->id_sub_category = $request->sub_kategori;
        $store->save();

        return redirect()->route('admin_post_show')->with('success', 'Postingan berhasil di upload');
    }

    public function edit($id)
    {
        $edit = Post::where('id', $id)->first();
        $sub_kategori = Sub_Category::with('rCategory')->get();
        return view('admin.post.post_edit', compact('edit', 'sub_kategori'));
    }

    public function update(Request $request, $id)
    {
        $update = Post::where('id', $id)->first();
        if ($request->file('image')) {
            $request->validate([
                'photo' => 'required|image|mimes:png,jpg,jpeg',
            ]);
            unlink(public_path('uploads/image/' . $update->image));
            $now = time();
            $ext = $request->file('photo')->extension();
            $final = 'manga_' . $now . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/img/'), $final);
            $update->image = $final;
        }
        $update->title = $request->title;
        $update->desc = $request->desc;
        $update->id_category = $request->kategori;
        $update->id_sub_category = $request->sub_kategori;
        $update->update();

        return redirect()->route('admin_post_show')->with('success', 'Postingan berhasil di edit');
    }

    public function delete($id)
    {
        $del = Post::where('id', $id)->first();
        unlink(public_path('uploads/img/' . $del->image));
        $del->delete();

        return redirect()->route('admin_post_show')->with('success', 'Postingan berhasil dihapus');
    }
}
