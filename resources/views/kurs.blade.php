@extends('layout')
@section('content')

<link rel="stylesheet" href={{ asset('css/kursevi.css') }}>
<div >
<h1>Kursevi</h1>



<h2>{{$kurs->title}}</h2>

<p>{{$kurs->description}}</p>


    

</div>
@endsection
