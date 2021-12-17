<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Stock;
use Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;

class BookController extends Controller
{
    public function index(Request $request) {
        return view('book.home');
    }
    public function home() {
        $books = Book::join('users', 'books.user_id', 'users.id')
        ->where('users.id', 'books.user_id')
        ->select('users.id','books.title', 'books.author', 'books.type', 'books.image')
        ->simplePaginate(9);
        return view('book.index', compact('books'));
    }
    public function new() {
        $onemonth=Carbon::today()->subMonth();
        $books=Book::whereDate('created_at', '>=', $onemonth)->get();
        return view('book.new', compact('books'));
    }
    public function create(Request $request) {
        if($request->isMethod('post')) {
            $book = $request->input();
            if(!empty($request->file('image'))) {
                $imgname=$request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('image', $imgname, 'bookimg');
            }
            Book::create([
                'user_id' => Auth::id(),
                'title' => $book['title'],
                'author' => $book['author'],
                'type' => $book['type'],
                'image' => $imgname,
            ]);

            $stock = Book::latest()->first();
            Stock::create([
                'book_id' => $stock->id,
                'stock' => $book['stock'],
            ]);
            return redirect('book/create');
        }
        return view('book.create');
    }
    public function search(Request $request) {
        if($request->input('a_search')) {
            $key = $request->input('a_search');
            $books = Book::join('users', 'books.user_id', 'users.id')
            ->where('title', 'like', '%'.$key.'%')
            ->select('users.id','books.title', 'books.author', 'books.type', 'books.image')
            ->simplePaginate(9);
            return view('book.search', compact('books', 'key'));
        }
        if($request->input('b_search')) {
            $post_data = $request->all();
            $data = "https://www.googleapis.com/books/v1/volumes?q=".$post_data["b_search"];
            $json = file_get_contents($data);
            $json_decode = json_decode($json, true);
            // dd($json_decode['items']);
            return view('book.search', compact("json_decode"));
        }
        return view('book.search');
    }
    public function show(Int $book) {
        $book = Book::where('id', $book)
        ->first();
        return view('book.show',compact('book'));
    }
    public function edit(Int $book) {
        $book = Book::where('id', $book)
        ->first();
        return view('book.edit',compact('book'));
    }
    public function update(Int $book, Request $request) {
        $data = $request->input();
        Book::where('id', $book)
        ->update([
            'title' => $data['title'],
            'author' => $data['author'],
            'type' => $data['type'],
        ]);
        return redirect()->route('book.show', ['book' => $book]);
    }
}