<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class student extends Controller
    {
    public function post($tieude,$id){
        return "<h1>$tieude<br>$id</h1>";
     }
    public function sum($a,$b){
       $sum=$a+$b;
       return "$sum";
        }
    public function getSoThich(){
        $sothich=["xem phim","game"];
        return view('student.index',[
            "sothich"=> $sothich
        ]);
        }
    }
?>
