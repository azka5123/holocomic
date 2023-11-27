<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResources;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiTestController extends Controller
{
    public function index()
    {
        $post = Post::get();
        return PostResources::collection($post);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // $imageName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/img/'), $imageName); // Simpan gambar di direktori public/images
        }

        // $desc = $request['desc'];
        // $id_category = $request['id_category'];
        // $id_sub_category = $request['id_sub_category'];


        // $post = Post::create([
        //     'image' => $imageName,
        //     'desc' => $request->input('desc'),
        //     'id_category' => $request->input('id_category'),
        //     'id_sub_category' => $request->input('id_sub_category'),
        // ]);

        // return response()->json(['msg' => 'Data created', 'data' => $post], 201);
    }
}
