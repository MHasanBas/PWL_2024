<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat datang'; 
    }
    public function name () { 
        return '2241760139    M.HASAN BASRI'; 
    }
    
    public function idsaya($id){
        return 'Halaman dengan id : '. $id;
    }
}
