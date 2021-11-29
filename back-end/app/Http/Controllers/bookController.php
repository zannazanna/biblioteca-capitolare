<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function AllBook(){
        return Book::get();
    }

    public function insertBook(Request $request){
        $newDataBook = json_decode($request->getContent());
        $newBook = new Book();
        $newBook -> titolo = $newDataBook-> titolo;
        $newBook -> autore = $newDataBook-> autore;
        $newBook -> isbn = $newDataBook-> isbn;
        $newBook -> genere = $newDataBook-> genere;
        $newBook -> valutazione = $newDataBook-> valutazione;
        $newBook -> link = $newDataBook-> link;

         $newBook->save();
         return $newDataBook;

    }

    public function deleteBook($id){
        $deleteBook = new Book();
        $deleteBook = Book::where('id', $id)->first()->delete();
        return $deleteBook;
    }

    public function modifica(Request $request, $id){
        $modifiBook = json_decode($request->getContent());
        $newModifi = Book::where('id',$id)->first();
        $newModifi -> titolo = $modifiBook -> titolo;
        $newModifi -> autore = $modifiBook -> autore;
        $newModifi -> isbn = $modifiBook -> isbn;
        $newModifi -> link = $modifiBook -> link;
        $newModifi -> genere = $modifiBook -> genere;
        $newModifi -> valutazione = $modifiBook -> valutazione;
        
        $newModifi->save();

        return $modifiBook;
    }
}
