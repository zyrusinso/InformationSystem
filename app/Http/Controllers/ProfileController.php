<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Auth;




class ProfileController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $isAdmin = Auth::user()->isAdmin();

        
        $students = Student::where('id', '=', $request->route('id'))->get();
        $users = Auth::user()->id;
       
        
        return view('profile', compact('students', 'users', 'isAdmin'));
        
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Profile $profile)
    {
        $students = Student::where('id', '=', $request->route('id'))->get();
        $isAdmin = Auth::user()->isAdmin();

        
        return view('EditProfile', compact('students', 'isAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $students = Student::where('id', '=', $request->route('id'))->get();
        
        $data = request()->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'middle_name' => 'required|string|max:50',
            'lrn' => 'required|digits_between:11,20',
            'stud_num' => 'required|digits_between:8,15',
            'date_of_birth' => 'required',
            'section' => 'required|min:4|max:4',
            'age' => 'required|max:3',
        ]);

        DB::table('students')->updateOrInsert($data);

        $stud = $request->route('id');
        return redirect("/profile/$stud");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile, Request $request)
    {
        $students = Student::where('id', '=', $request->route('id'));
        
        $students->delete();

        return redirect('/admin/student');
    }
}
