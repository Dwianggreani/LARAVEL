@extends('layouts.master')

@section('title', 'Tambah')

@section('content')
           
            <form action="" method="post">
            @method('patch')
            @csrf 

            <div class="container">
           
        <div class="form-group my-4">
            <label for="judulbuku">Judul Buku</label>
            <input type="text" name="judulbuku"  class="form-control" id="judulbuku" required value="{{$datas->judulbuku}}">

            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" id="isbn" required value="{{$datas->isbn}}">

            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" id="pengarang" required value="{{$datas->pengarang}}">

            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" required value="{{$datas->penerbit}}">
        </div>     
       
        <button type="submit" class="btn btn-primary">Submit</button>
          

           </form>
                   
@endsection
          