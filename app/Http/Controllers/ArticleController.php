<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function idsaya($id){
        return 'Halaman dengan id : '. $id;
    }
}
