<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    //middleware
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request){

       


        return view('dashboard');
    }
}
