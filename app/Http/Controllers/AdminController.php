<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Hash;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = Auth::id();
        $isAdmin = Auth::user()->isAdmin();
         
        $authUser = User::where('id', '=', $id)->get();
        $students = Student::where('id', '=', $request->route('id'))->get();

        return view('admin', compact('students', 'authUser', 'isAdmin'));
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        
        
        $id = Auth::id();
        $authUser = User::where('id', '=', $id)->get();

        foreach($authUser as $users){
            Hash::make($request->input('oldpassword'));

            $hashedPass = Hash::make($request->input('password'));
            $pass = $users->password;
            
            request()->validate([
                'oldpassword' => ['required', function ($attribute, $value, $fail) {
            if (!\Hash::check($value, Auth::user()->password)) {
                return $fail(__('The current password is incorrect.'));
            }
        }]
            ]);
            $data = request()->validate([
                'name' => 'required|string|max:50',
                'email' => 'email|required|max:50',
                'password' => 'min:7|max:30|different:oldpassword',
            ]);
            
            
            DB::table('users')->update($data);

            $stud = $request->route('id');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
