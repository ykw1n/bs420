<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
    public int $minPagesNumber;
    public array $libraryBooks;
    public int $maxPrice;
    public array $storeBook;

    /**
     * BooksGenerator constructor.
     * @param $minPagesNumber
     * @param $libraryBooks
     * @param $maxPrice
     * @param $storeBook
     */
    public function __construct($minPagesNumber, $libraryBooks, $maxPrice, $storeBook)
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBook = $storeBook;
    }


    public function generate(): \Generator
    {



    }
}