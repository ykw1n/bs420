<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
    public int $minPagesNumber;
    public array $libraryBooks;
    public int $maxPrice;
    public array $storeBook;
    public array $filteredBooks = [];

    /**
     * BooksGenerator constructor.
     * @param $minPagesNumber
     * @param $libraryBooks
     * @param $maxPrice
     * @param $storeBook
     */
    public function __construct(int $minPagesNumber, array $libraryBooks, int $maxPrice, array $storeBook)
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBook = $storeBook;
    }


    public function generate(): \Generator
    {

        foreach ($this->libraryBooks as $libValue) {
            if ($libValue->getPagesNumber() >= $this->minPagesNumber) {
                $this->filteredBooks[] = new Book($libValue->getTitle(), $libValue->getPrice(), $libValue->getPagesNumber());
            }
        }
        foreach ($this->storeBook as $storeValue) {
            if ($storeValue->getPrice() <= $this->maxPrice) {
                $this->filteredBooks[] = new Book($storeValue->getTitle(), $storeValue->getPrice(), $storeValue->getPagesNumber());
            }
        }
        foreach ($this->filteredBooks as $bookItem) {
            yield $bookItem;
        }

    }
}