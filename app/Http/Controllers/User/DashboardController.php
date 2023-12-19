<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view("user.Index");
    }

    public function detail()
    {
        return view("user.DetailPost");
    }

    public function upload()
    {
        return view('user.Upload');
    }
}
