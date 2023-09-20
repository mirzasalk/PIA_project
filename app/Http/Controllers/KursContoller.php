<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class KursContoller extends Controller
{
    public function getAll(){
        return view('kursevi',[
            'naslov'=>"Poslednji kursevi",
            "kursevi"=> Course::all()
        ]);
    }

    public function getById(Course $kurs){
        return view('kurs',[
            "kurs"=> $kurs
        ]);
        
    }
}
