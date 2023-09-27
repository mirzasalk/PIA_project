<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KursContoller extends Controller
{
    public function getAll(){
        return view('kurs.kursevi',[
            "kursevi"=> Course::latest()->filter(request(['tag','search']))->paginate(2)
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
            'time'=>'required'
            
        ]);
        if($request->hasFile('kursSlika')){
            $formFields['kursSlika']= $request->file('kursSlika')->store('CourseImages','public');
        }
        Course::create($formFields);
        return redirect("/kursevi")->with('poruka',"Kurs uspesno kreiran");
        
    }
    public function edit(Course $kurs){
        return view('kurs.izmena',['kurs'=>$kurs]);
        
    }
    public function update(Request $request,Course $kurs){
        
        $formFields =  $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'tags'=> 'required',
            'time'=>'required'
            
        ]);
        if($request->hasFile('kursSlika')){
            $formFields['kursSlika']= $request->file('kursSlika')->store('CourseImages','public');
        }
        $kurs->update($formFields);
        return redirect("/kursevi")->with('poruka',"Kurs uspesno izmenjen");
        
    }
}
