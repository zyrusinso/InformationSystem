<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use App\Models\Student;
use DB;
use Auth;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
        $userList = User::all();
        $isAdmin = Auth::user()->isAdmin();
         
         $id = Auth::id();
         
         $users = User::where('id', '=', $id)->get();
        return view('user', compact('userList', 'users', 'isAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $userList = User::all();
        $isAdmin = Auth::user()->isAdmin();
         
         $id = $request->route('id');
         
         $users = User::where('id', '=', $id)->get();
        return view('EditUser', compact('userList', 'users', 'isAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($request->route('id'));
        
        if ($request->input('password') == ''){
            $this->validate($request, [
                'name' => 'required|string|max:50',
                'email' => 'required|string|max:50',
            ]);
            $user->update($request->except('password'));
            
        }else{
            $this->validate($request, [
                'password' => 'min:8|max:50',
                'name' => 'required|string|max:50',
                'email' => 'required|string|max:50',
            ]);
            $request->request->set('password',bcrypt($request->input('password')));
            $request = $request->all();
            
            $user->update($request);
            
        }

        
        return redirect("/user");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        
        $students = User::where('id', '=', $request->route('id'));
        
        $students->delete();

        return redirect('/user');
    }
}
