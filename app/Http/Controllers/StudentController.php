<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Hash;
use App\Models\User;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $isAdmin = Auth::user()->isAdmin();

         
         $id = Auth::id();
         
         $users = Student::where('id', '=', $id)->get();
        return view('student.students', compact('students', 'users', 'isAdmin'));
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
    public function store(Request $request, Student $student)
    {
        // $register = $student::create($request->all());
        // return response()->json(
        //     [
        //         'message' => 'Job Posting is Successfully Saved!', 
        //         'data' => $request->all()
        //     ]
        // );
       

        

        $validate = $this->validate($request, [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'middle_name' => 'required|string|max:50',
            'email' => 'required|email|unique:users',
            'lrn' => 'required|unique:students|min:11',
            'stud_num' => 'required|unique:students|min:8',
            'date_of_birth' => 'required',
            'section' => 'required|min:4|max:4',
            'age' => 'required|max:3',
            'gender' => 'required',
            'pass' => 'required|confirmed|min:6',
            
        ]);
        $pass = $request->input('pass');
        $hashed = Hash::make($pass);

        $validate['pass'] = $hashed;
        // dd($validate);

        // dd($request->input('password'));
        // $student::create($register);
       

        Student::create($validate);

        return redirect('/admin/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
