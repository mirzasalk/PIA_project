<x-layout>

<link rel="stylesheet" href={{ asset('css/kursevi.css') }}>

<div >

<h1>Kursevi</h1>

@include('partials._search')

@foreach ($kursevi as $kurs)

<x-kurs-card :kurs="$kurs"/>

@endforeach

</div>

</x-layout>

