@extends('layouts.master')

@section('title', 'Tambah')

@section('content')
           
            <form action="/tambah" method="post">
            @csrf 
            <div class="container">
           
        <div class="form-group my-4">
            <label for="judulbuku">Judul Buku</label>
            <input type="text" name="judulbuku" class="form-control" id="judulbuku" required>

            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" id="isbn" required>

            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" class="form-control" id="pengarang" required>

            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit" required>
        </div>     
       
        <button type="submit" class="btn btn-primary">Submit</button>
          

           </form>
                   
@endsection
          