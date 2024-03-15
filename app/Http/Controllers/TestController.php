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

        ];
        
        return Inertia::render('Teacher', [
            'response' => $data,
        ]);
    }
    public function classlist() {
        $books = Book::get();

        $data = [

        ];
        
        return Inertia::render('Classlist', [
            'response' => $data,
        ]);
    }
    public function addclass() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Addclass', [
            'response' => $data,
        ]);
    }
    public function editclass() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Editclass', [
            'response' => $data,
        ]);
    }
    public function addteacher() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Addteacher', [
            'response' => $data,
        ]);
    }
    public function editteacher() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Editteacher', [
            'response' => $data,
        ]);
    }
    public function addclasslist() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Addclasslist', [
            'response' => $data,
        ]);
    }
    public function editclasslist() {
        $books = Book::get();

        $data = [
            
        ];
        
        return Inertia::render('Editclasslist', [
            'response' => $data,
        ]);
    }

};
