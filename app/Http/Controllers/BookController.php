<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{// obetener todos los libros
    public function index()
    {
        $books = Book::get();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        
        return view('book.create');
    }

  // guardar libro
    public function store(Request $request)
    {
        try { DB::beginTransaction();
            $book = new Book();
            $book->title            = $request->title;
            $book->author           = $request->author;
            $book->literary_engre   = $request->literary_engre;
            $book->description      = $request->description;
            $book->save();
            DB::commit();
          
            return redirect(route('book.index'))->with('success', 'Book is successfully created');
          } catch(\Exception $e) { DB::rollback(); throw $e; }
    }

    public function show(Request $request, $id) {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
      }

    public function edit(Request $request, $id) {
        $book = Book::findOrFail($id);
        return view('book.edit', compact('book'));
      }
      // actualizar libro
    public function update(Request $request, $id)
    {
      $book = Book::findOrFail($id);
      $book->title            = $request->title;
      $book->author           = $request->author;
      $book->description      = $request->description;
      $book->literary_engre   = $request->literary_engre;
      $book->save();
      return redirect(route('book.index'))->with('success', 'Book is successfully updated');

    }
// eliminar libro
    public function destroy(Request $request)
    {
        try { DB::beginTransaction();
            $id = $request->id;
            $book = Book::findOrFail($id);
            $book->delete();
            
            DB::commit();
            return back()->with('success', 'Book is successfully deleted');
        } catch(\Exception $e) { DB::rollback(); throw $e; }
    }

}
