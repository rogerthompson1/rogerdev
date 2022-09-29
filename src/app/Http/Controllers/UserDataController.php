<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserDataController extends Controller
{
    public function index(){
        $users=UserData::latest()->get();
        return view('user-data',compact('users'));
    }
    public function store(Request $request){
        Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user_data'],
            'password' => ['required', 'string', 'max:255']
        ])->validate();
        UserData::create($request->except('_token'));
        session()->flash('success','Record Added');
        return redirect()->back();
    }
    public function delete($id){
        UserData::find($id)->delete();
        session()->flash('success','Record Deleted');
        return redirect()->back();
    }
    public function edit($id){
       $user= UserData::find($id);

       $html= view('user-modal',compact('user'))->render();
       return response()->json(['success'=>1,'html'=>$html]);
    }
    public function update(Request $request,$id){
        Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255']
        ])->validate();
        UserData::find($id)->update($request->except('_token'));
        session()->flash('success','Record Updated');
        return redirect()->back();
    }
}
