<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //$users =User::all();
        $users =User::orderBy('id','desc')->paginate(10);
        return view('user.index',compact('users'));
        
    }
    //form html
    public function create()
    {
        # code...
        return view('user.create');
    }    
    //form return true,false
    public function store(Request $request)
    {
        # code...
        $user=User::create($request->all());
         
        return redirect('users');
    }
    public function show($id)
    {
        $user = User::find($id);
        # code...
        return view('user.show',compact('user'));
        
        
    }
    
  public function destroy($id)
  {
      # code...
      $user = User::find($id)->delete();
      return redirect('users'); 
  }

  public function edit($id)
  {
      # code...
      $user = User::find($id);
      return view('user.edit',compact('user'));
  }
  public function update(Request $request, $id)
  {
      # code...
      $users=User::find($id)->update($request->all());
      return redirect('users');
  }
}