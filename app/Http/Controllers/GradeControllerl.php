<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function create (){
        return view ('grade.create');
    }

    public function store (Request $request){
        $name = $request->get('name');
        //DB::insert('insert into course (name_course) values ( ?)', [$name]);
        $grade = new Grade ;
        $grade -> name_course = $name;
        $grade-> save();


    }
}
