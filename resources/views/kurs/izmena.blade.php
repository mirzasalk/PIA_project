<x-layout>
    <link rel="stylesheet" href={{ asset('css/kreirajKurs.css') }}>
    <form method="POST" action="/kurs/{{$kurs->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
        <label for="title">Promeni naziv kursa</label>
        <input type="text" name="title" placeholder="Unesite naziv kursa" value="{{$kurs->title}}">
        @error('title')
        <div>{{$message}}</div>
            
        @enderror
    </div>
        <div>
        <label for="description">Promeni opis kursa</label>
        <input type="text" name="description" placeholder="Unesite opis kursa" value="{{$kurs->description}} " style="width: 25em" height="25em">
        @error('description')
        <div>{{$message}}</div>
        @enderror
    </div>
        <div>
        <label for="tags">Promeni tagove</label>
        <input type="text" name="tags" placeholder="Unesite tagove kursa" value="{{$kurs->tags}}">
        @error('tags')
        <div>{{$message}}</div>  
        @enderror
    </div>
        <div>
        <label for="time">Promeni vreme trajanja</label>
        <input type="number" name="time" placeholder="Unesite vreme trajanja kursa" value="{{$kurs->time}}">
        @error('time')
        <div>{{$message}}</div>  
        @enderror
    </div>
        <div>
        <label for="kursSlika">Promeni sliku kursa</label>
        <input type="file" name="kursSlika" placeholder="Unesite sliku kursa" value="{{$kurs->kursSlika}}">
        <img src="{{asset('storage/'. $kurs->kursSlika)}}" class="slikaKurs" alt="slikaLogo" style="width: 6em">
        @error('kursSlika')
        <div>{{$message}}</div>  
        @enderror
    </div>
      <button>Izmeni</button>
    </form>
    </x-layout>