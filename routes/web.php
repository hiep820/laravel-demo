<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\student;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/posst/{tieude}/{id}',[student::class, 'post']);
//Route::get("/grade/create", [GradeController::class, 'create']);
//Route::post("/grade/store",[GradeController::class, 'store'])->name('store');
Route::resource("grade", GradeController::class);
?>
