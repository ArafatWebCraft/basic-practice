<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateStudentRequest;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function create_student(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:students,email'],
            'message' => ['required', 'string', 'max:1000'],
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->message = $request->message;
        $student->save();        
        return redirect()->route('home.page')->with('success', 'Data inserted');
    }
}
