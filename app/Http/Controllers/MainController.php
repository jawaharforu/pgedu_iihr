<?php

namespace App\Http\Controllers;

use CRUDBooster;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function getSignUp() {
        $data =  [];
        return view('pages.signup',$data);
    }
}
