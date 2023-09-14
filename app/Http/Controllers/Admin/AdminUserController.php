<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function show_user()
    {
        $user = User::orderBy('id')->get();
        return view('admin.user.user_show', compact('user'));
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin_user_show')->with('success', 'user berhasil dihapus');
    }
}
