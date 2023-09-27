
<x-layout>
<link rel="stylesheet" href={{ asset('css/kursevi.css') }}>
<div >



<img src="{{asset('storage/'. $kurs->kursSlika)}}" class="slikaKurs" alt="slikaLogo">
<h2>{{$kurs->title}}</h2>
<p>{{$kurs->description}}</p>
<a href="/kurs/{{$kurs->id}}/izmena">edit</a>   
</div>
</x-layout>

