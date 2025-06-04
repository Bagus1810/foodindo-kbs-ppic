<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoController extends Controller
{
    public function indexPo(){
        return view('kbs-pages/po');
    }
}
