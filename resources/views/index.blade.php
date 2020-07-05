@extends('layouts.master')

@section('title', 'Index')

@section('content')
        <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">ISBN</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1 ; ?>
  @foreach ($books as $book)
    <tr>
      <th scope="row">{{ $no }} </th>
      <td>{{ $book->judulbuku }} </td>
      <td>{{ $book->isbn }} </td>
      <td>{{ $book->pengarang }} </td>
      <td>{{ $book->penerbit }} </td>
      <td>
      <a href="/edit/{{$book->id}}"class="btn btn-warning btn-sm">EDIT</a>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Apakah Anda Yakin ??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="/hapus/{{ $book->id }}" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>

      </td>
      </tr>
  <?php $no++ ?>
  @endforeach
  </tbody>
</table>
        </div>
@endsection