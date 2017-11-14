<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class teacherSignupController extends Controller
{
  
    public function viewTeacherSignup(){

        return view("signin_signup.teacherSignup");


    }



    public function teacherSignup( Request $request ){

       $iName=$request->iName;
       $email=$request->email;
       $password=$request->password;
       $cPassword=$request->cPassword;
       

       $instructor = new Teacher();

       $instructor->iName=$iName;
       $instructor->email=$email;
       $instructor->password=$password;
       
       $instructor->save();

       return "success";


       

    }
}
