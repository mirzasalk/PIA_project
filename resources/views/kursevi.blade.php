@extends('layout')
@section('content')

<link rel="stylesheet" href={{ asset('css/kursevi.css') }}>
<div >
<h1>Kursevi</h1>

@foreach ($kursevi as $kurs)
@include('partials._search')
<a href="/kurs/{{$kurs->id}}">
<h2>{{$kurs->title}}</h2>
</a>
<p>{{$kurs->description}}</p>


    
@endforeach

</div>
@endsection
