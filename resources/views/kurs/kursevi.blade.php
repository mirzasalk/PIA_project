<x-layout>

<link rel="stylesheet" href={{ asset('css/kursevi.css') }}>

<div >


@include('partials._search')

@foreach ($kursevi as $kurs)

<x-kurs-card :kurs="$kurs"/>

@endforeach
<div class="paginacijaLink">
    {{$kursevi->links()}}
</div>

</div>

</x-layout>

