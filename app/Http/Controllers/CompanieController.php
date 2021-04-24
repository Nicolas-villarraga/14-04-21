<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class CompanieController extends Controller
{
    //

    public function index(){
    $companies=Companie::all(35);
    return view('companie.index',compact('companies'));
    }
}
