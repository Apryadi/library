<?php

namespace Database\Seeders;

use App\Models\MediaItem;
use Illuminate\Database\Seeder;

class MediaItemSeeder extends Seeder
{
    public function run()
    {
        $mediaItems = [
            [
                'title' => 'Programming Tutorial Series',
                'type' => 'DVD',
                'content_type' => 'Educational',
                'access_granted' => false,
            ],
            [
                'title' => 'Classical Music Collection',
                'type' => 'CD',
                'content_type' => 'Music',
                'access_granted' => true,
            ],
            [
                'title' => 'Documentary: World History',
                'type' => 'DVD',
                'content_type' => 'Documentary',
                'access_granted' => false,
            ],
        ];

        foreach ($mediaItems as $item) {
            MediaItem::create($item);
        }
    }
} 