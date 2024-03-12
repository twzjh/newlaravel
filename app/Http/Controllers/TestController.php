<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $books = Book::get();

        $data = [
            'books' => $books,
            'count' => 1,
            'title' => '血鑽石',
        ];
        
        return Inertia::render('Test', [
            'response' => $data,
        ]);
    }
    public function teacher() {
        $books = Book::get();

        $data = [
            'books' => $books,
            'count' => 1,
            'title' => '血鑽石',
        ];
        
        return Inertia::render('Teacher', [
            'response' => $data,
        ]);
    }

};
