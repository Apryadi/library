<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    public function run()
    {
        $journals = [
            [
                'title' => 'Journal of Computer Science',
                'publisher' => 'Tech Publications',
                'volume' => 'Vol. 15',
                'issue' => 'Issue 3',
                'publication_date' => '2024-01-15',
                'access_granted' => false,
            ],
            [
                'title' => 'Business Review Quarterly',
                'publisher' => 'Business Press',
                'volume' => 'Vol. 8',
                'issue' => 'Issue 1',
                'publication_date' => '2024-02-01',
                'access_granted' => true,
            ],
        ];

        foreach ($journals as $journal) {
            Journal::create($journal);
        }
    }
} 