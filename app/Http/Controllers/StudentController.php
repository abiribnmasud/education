<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    
public function viewStudentSignup(){


return view("signin_signup.studentSignup");



}


public function studentSignup (Request $request)
{
$this->validate($request,[
"sName"=>"bail | required |min:5 | max:100 ",
"sEmail"=>"bail | required | email | unique:students,email",
"sPassword"=>"bail | required | min:3 | max:20 ",
"cPassword"=>"bail | required | same:sPassword "





 ]);



     $sName=$request->sName;

    $sEmail=$request->sEmail;

    $sPassword=$request->sPassword;

    $cPassword=$request->cPassword;

   $s1=new Student();

$s1->sName=$sName;
$s1->email=$sEmail;
$s1->password=$sPassword;

$s1->save();
return "success";
}

}
