<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KursContoller extends Controller
{
    public function getAll(){
        return view('kurs.kursevi',[
            "kursevi"=> Course::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    public function getById(Course $kurs){
        return view('kurs.kurs',[
            "kurs"=> $kurs
        ]);
        
    }
    public function create(){
        return view('kurs.create');
        
    }
    public function store(Request $request){
        $formFields =  $request->validate([
            'title'=> ['required',Rule::unique('courses','title')],
            'description'=> 'required',
            'tags'=> 'required',
            'time'=>'required',
        ]);
        Course::create($formFields);
        return redirect("/kursevi");
        
    }
}
