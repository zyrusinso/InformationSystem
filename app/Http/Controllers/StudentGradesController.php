<?php

namespace App\Http\Controllers;

use App\Models\studentGrades;
use Illuminate\Http\Request;
use App\Models\Student;
use Auth;
use DB;

class StudentGradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logAuth = Auth::user()->name;
        
        $isAdmin = Auth::user()->isAdmin();

        $id = $request->route('id');
        $gfirst = DB::table('students')
                    ->join('student_grades', 'students.id', 'student_grades.user_id')
                    ->where('student_grades.user_id', '=', $id)
                    ->where('student_grades.grading', '=', '1st Grading')
                    ->get();

                   

        $gsecond = DB::table('students')
                    ->join('student_grades', 'students.id', 'student_grades.user_id')
                    ->where('student_grades.user_id', '=', $id)
                    ->where('student_grades.grading', '=', '2nd Grading')
                    ->get();
                   

        $gthird = DB::table('students')
                    ->join('student_grades', 'students.id', 'student_grades.user_id')
                    ->where('student_grades.user_id', '=', $id)
                    ->where('student_grades.grading', '=', '3rd Grading')
                    ->get();


        $gfour = DB::table('students')
                    ->join('student_grades', 'students.id', 'student_grades.user_id')
                    ->where('student_grades.user_id', '=', $id)
                    ->where('student_grades.grading', '=', '4th Grading')
                    ->get();
        
        // dd($grades);
        $students = Student::where('id', '=', $request->route('id'))->get();
        $users = Auth::user()->id;

       
        return view('grades', compact('logAuth', 'students','users', 'gfirst', 'gsecond', 'gthird', 'gfour', 'isAdmin'));
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
     * @param  \App\Models\studentGrades  $studentGrades
     * @return \Illuminate\Http\Response
     */
    public function show(studentGrades $studentGrades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentGrades  $studentGrades
     * @return \Illuminate\Http\Response
     */
    public function edit(studentGrades $studentGrades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentGrades  $studentGrades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentGrades $studentGrades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentGrades  $studentGrades
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentGrades $studentGrades)
    {
        //
    }
}
