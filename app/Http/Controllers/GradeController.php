<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request-> get('search');
        $listGrade = Grade::where('name_course','like',"%$search%")->paginate(2);
        return view('grade.index', [
            'listGrade' => $listGrade,
            'search' => $search,
        ]);
    }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function create()
    {
        return view ('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        //DB::insert('insert into course (name_course) values ( ?)', [$name]);
        $grade = new Grade ;
        $grade -> name_course = $name;
        $grade-> save();
        return redirect(route('grade.index'));
    }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function show($id)
    {
        $grade = Grade::where('id_course', $id)->first();
        return $grade;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grade::where('id_course', $id)->delete();
        return redirect(route('grade.index'));
    }
}
