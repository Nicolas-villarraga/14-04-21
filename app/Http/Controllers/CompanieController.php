<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class CompanieController extends Controller
{
    //

    public function index(){
            $companies=Companie::paginate(35);
            return view('companie.index',compact('companies'));
    }
}
