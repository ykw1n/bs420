<?php

declare(strict_types=1);

namespace App\Task2;

class Book
{
    public string $title;
    public int $price;
    public int $pagesNumber;

    /**
     * Book constructor.
     * @param $title
     * @param $price
     * @param $pagesNumber
     */
    public function __construct($title, $price, $pagesNumber)
    {
        $this->title = $title;
        $this->price = $price;
        $this->pagesNumber = $pagesNumber;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPagesNumber(): int
    {
        return $this->pagesNumber;
    }
}