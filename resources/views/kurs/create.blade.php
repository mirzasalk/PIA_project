<x-layout>
<link rel="stylesheet" href={{ asset('css/kreirajKurs.css') }}>
<form method="POST" action="/kursevi" enctype="multipart/form-data">
    @csrf
    <div>
    <label for="title">Naziv kursa</label>
    <input type="text" name="title" placeholder="Unesite naziv kursa" value="{{old('title')}}">
    @error('title')
    <div>{{$message}}</div>
        
    @enderror
</div>
    <div>
    <label for="description">Opis kursa</label>
    <input type="text" name="description" placeholder="Unesite opis kursa" value="{{old('description')}}">
    @error('description')
    <div>{{$message}}</div>
    @enderror
</div>
    <div>
    <label for="tags">Tagovi</label>
    <input type="text" name="tags" placeholder="Unesite tagove kursa" value="{{old('tags')}}">
    @error('tags')
    <div>{{$message}}</div>  
    @enderror
</div>
    <div>
    <label for="time">Vreme trajanja</label>
    <input type="number" name="time" placeholder="Unesite vreme trajanja kursa" value="{{old('time')}}">
    @error('time')
    <div>{{$message}}</div>  
    @enderror
</div>
    <div>
    <label for="kursSlika">Slika kursa</label>
    <input type="file" name="kursSlika" placeholder="Unesite sliku kursa" value="{{old('kursSlika')}}">
    @error('kursSlika')
    <div>{{$message}}</div>  
    @enderror
</div>
  <button>Kreiraj</button>
</form>
</x-layout>