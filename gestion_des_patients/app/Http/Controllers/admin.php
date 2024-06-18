<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class admin extends Controller
{
    public function showAdmin()
    {
        $Admin = User::all();
        return view('datatable-Administrateurs', ['Admin' => $Admin]);
    }
}
