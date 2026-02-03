<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('dashboardm', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Book::create([
            'titre' => $request->titre,
            'auteur' => $request->auteur,
            'description' => $request->description,
        ]);

        return redirect()->route('books.index')
            ->with('success', 'Livre ajouté !');
    }

    public function modifier(Request $request)
    {
        $books = Book::latest()->take(5)->get();

        $selectedproduct = $request->has('id')
            ? Book::find($request->id)
            : null;

        return view('dashboardm', compact('books', 'selectedproduct'));
    }

    public function rechercher(Request $request)
    {
        $search = $request->input('search');

        $books = Book::where('titre', 'like', "%$search%")->get();

        return view('dashboardm', compact('books'));
    }
    
    public function dashboardb()
{
    
    $books = Book::all(); 
    dd($books);
    return view('dashboardb.index', compact('books')); 
}

}
