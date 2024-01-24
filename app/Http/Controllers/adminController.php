<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //admin Menu

    public function admin()
    {
        return view('adminMenu');
    }
}
