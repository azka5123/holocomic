<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function show_user()
    {
        return view('admin.user.user_show');
    }

    public function create()
    {
    }
}
