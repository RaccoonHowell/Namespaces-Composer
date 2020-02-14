<?php

namespace App\Library;

class Shelf 
{
    private $books = [];

    public function addBook(Book $book) : Shelf
    {
        $this->books[] = $book;
        return $this;
    }

    public function titles() : array
    {
        return collect($this->books)->map(function ($book) {
            return $book->getTitle();
        })->all();
    }
}

// Create a Shelf class. It should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf.