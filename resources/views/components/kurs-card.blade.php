<link rel="stylesheet" href={{ asset('css/kurs-card.css') }}>
@props(['kurs'])
<?php
    $tagsTemp = explode(',', $kurs->tags)
?>

<x-card>
<a href="/kurs/{{$kurs->id}}">
    <img class="slikaKurs" src="{{asset('storage/'.$kurs->kursSlika)}}" alt="SlikaKursa">
    <h2>{{$kurs->title}}</h2>
    </a>
    <p>{{$kurs->description}}</p>
    <div class="tagsField">
   @foreach ($tagsTemp as $item) 
   <a class="tag" href="/kursevi/?tag={{$item}}">{{$item}}</a>
   @endforeach
</div>
</x-card>   