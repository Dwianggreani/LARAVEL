<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
       return view ('index', compact('books'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Book;

        $this->validate($request, [
            'judulbuku' => 'required',
            'isbn' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
         ]);


        $books->judulbuku = $request->input('judulbuku');
        $books->isbn = $request->input('isbn');
        $books->pengarang = $request->input('pengarang');
        $books->penerbit = $request->input('penerbit');

        $books->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $datas)
    {
        return view ('edit', compact('datas'));    
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $datas)
    {
        Book::where('id' , $datas->id)->update([
            'judulbuku' => $request->judulbuku,
            'isbn' => $request->isbn,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $datas)
    {
        Book::destroy($datas->id);
        return redirect('/');
    }
}
