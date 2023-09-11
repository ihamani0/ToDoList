<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsCntrl extends Controller
{
    public function Index()
    {


        $All_Std = Student::all();

        return view('Students.Index', ['AllStd' => $All_Std]);
    }
    //-----
    public function Show($student)
    {
        $Singl_student = Student::FindOrFail($student);

        return view('Students.Show', ['student' => $Singl_student]);
    }
    //-----

    public function Create()
    {

        return view('Students.Create');
    }
    //-----
    public function Store(Request $request)
    {


        $Full_Name = $request->Full_Name;
        $Deprtment = $request->Department;
        $Birthe_Day = request()->Birthe_Day ; 
        $Gender = request()->Gender ; 

        //FAil_Able 
        Student::create([
            'Full_Name' => $request->Full_Name ,
            'Department' =>  $Deprtment , 
            'Birthday' => $Birthe_Day , 
            'Gender' => $Gender 
        ]);


        return redirect()->route('Student.index');
    }

    public function Edit($Student){

        $Singl_student = Student::FindOrFail($Student);
        
        return view('Students.Edit' , [ 'Student' => $Singl_student]); 
    }

    public function Update($student , Request $request) {

        Student::FindOrFail($student)->update([
            'Full_Name' => $request->Full_Name ,
            'Department' => $request->Department ,
            'Birthday' => $request->Birthe_Day ,
            'Gender' => $request->Gender ,

        ]);

        return redirect()->route('Student.index');
    }

    public function Destroy($student) {

        Student::where('id',$student)->delete();

        return redirect()->route('Student.index');
    }

}
