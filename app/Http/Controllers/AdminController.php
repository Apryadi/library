<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin(){
        echo 'Anda Masuk Sebagai Admin';
        echo "<h1>".Auth::user()->name."</h1>";

        echo "<a href='logout'>Logout<a>";
    }
    function librarian(){
        echo 'Anda Masuk Sebagai Librarian';
        echo "<h1>".Auth::user()->name."</h1>";

        echo "<a href='logout'>Logout<a>";
    }
}
