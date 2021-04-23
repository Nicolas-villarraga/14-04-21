<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class CompaniesController extends Controller
{
    //
    public function companies(){
        $companies =Companie::paginate(15);
        return view('companie.companies',compact('companies'));
    }
}
