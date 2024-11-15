<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    public function run()
    {
        $newspapers = [
            [
                'title' => 'Daily News',
                'publisher' => 'Kompas',
                'publication_date' => '2024-03-15',
                'in_warehouse' => false,
            ],
            [
                'title' => 'Morning Edition',
                'publisher' => 'Tribun Timur',
                'publication_date' => '2024-03-10',
                'in_warehouse' => true,
            ],
            [
                'title' => 'Weekend Special',
                'publisher' => 'Fajar',
                'publication_date' => '2024-03-16',
                'in_warehouse' => false,
            ],
        ];

        foreach ($newspapers as $newspaper) {
            Newspaper::create($newspaper);
        }
    }
} 