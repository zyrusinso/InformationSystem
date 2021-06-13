<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
            'last_name',
            'middle_name',
            'email',
            'lrn',
            'stud_num',
            'date_of_birth',
            'section',
            'age',
            'gender',
            'password',
            
            
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $guarded = ['id'];

    
    public function getAuthPassword()
    {
     return $this->employee_password;
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    // public function grades(){
    //     return $this->hasMany(StudentGrades::class, 'id');
    // }
    
}
