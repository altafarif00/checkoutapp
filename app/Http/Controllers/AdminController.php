<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
    public function manageShipping(){
        return view('admin.shipping.index');
    }
}
