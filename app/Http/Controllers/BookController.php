<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Book::simplePaginate(6); // Fetches 6 books per page
            return view('books.index', compact('books'));
        } catch (\Exception $e) {
            // Log the error or handle it as per your application's requirement
            Log::error('Error fetching books: ' . $e->getMessage());
            $error = 'Failed to retrieve books.';
            return view('books.index', compact('error'));
        }
    }
}
