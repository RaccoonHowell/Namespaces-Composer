<?php

namespace App\Library;

class Book
{
    private $title;
    private $pages;
    private $onPage = 1;

    public function __construct(string $title, int $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read(int $pagesRead)
    {
        $this->onPage += $pagesRead;
    }

    public function currentPage() : int
    {
        return $this->onPage;
    }
}

// Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.