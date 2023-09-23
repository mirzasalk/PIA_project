<x-layout>
<link rel="stylesheet" href={{ asset('css/kreirajKurs.css') }}>
<form method="POST" action="/kursevi">
    @csrf
    <div>
    <label for="title">Naziv kursa</label>
    <input type="text" name="title" placeholder="Unesite naziv kursa">
    @error('title')
    <div>{{$message}}</div>
        
    @enderror
</div>
    <div>
    <label for="description">Opis kursa</label>
    <input type="text" name="description" placeholder="Unesite opis kursa">
    @error('description')
    <div>{{$message}}</div>
    @enderror
</div>
    <div>
    <label for="tags">Tagovi</label>
    <input type="text" name="tags" placeholder="Unesite tagove kursa">
    @error('tags')
    <div>{{$message}}</div>  
    @enderror
</div>
    <div>
    <label for="time">Vreme trajanja</label>
    <input type="number" name="time" placeholder="Unesite vreme trajanja kursa">
    @error('time')
    <div>{{$message}}</div>  
    @enderror
</div>
  <button>Kreiraj</button>
</form>
</x-layout>