<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books = [
            [
                'title' => 'Introduction to Programming',
                'author' => 'John Smith',
                'isbn' => '978-0-123456-78-9',
                'type' => 'physical',
                'is_available' => true,
            ],
            [
                'title' => 'Digital Marketing Essentials',
                'author' => 'Jane Doe',
                'isbn' => '978-0-123456-78-0',
                'type' => 'ebook',
                'is_available' => true,
                'access_code' => 'DM2024',
            ],
            [
                'title' => 'Advanced Mathematics',
                'author' => 'Robert Johnson',
                'isbn' => '978-0-123456-78-1',
                'type' => 'physical',
                'is_available' => false,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
} 