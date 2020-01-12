<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use App\student;

class UserController extends Controller
{
    public function student_details(Request $request)
    {
        // $data = new 
        // dd($request->all());
        $data = new student();
        $data->student_name = $request->student_name;
        $data->mobile_no = $request->mobile_no;
        $data->save();
    }
}
