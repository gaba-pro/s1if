<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function admin()
    {
        return view('admin.menu.adminMenu');
    }
}
