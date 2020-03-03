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
        return redirect('/show_student_details');
    }

    public function read()
    {
        $data = student::all();
        return view('read', compact('data'));
    }

    public function delete($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect('/show_student_details');
    }
    public function edit(Request $request, $id)
    {
        $service = student::where('id', $id)->first();
        return view('edit', compact('service'));
    }
    public function update(Request $request, $id)
    {
        $service = student::where('id', $id)->first();
        $service->student_name = $request->student_name;
        $service->mobile_no = $request->mobile_no;
        $service->save();
        return redirect('/show_student_details');
    }
}
