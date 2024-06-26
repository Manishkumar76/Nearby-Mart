<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FeedbackRating;

class FeedbackRatingSeeder extends Seeder
{
    // Run the database seeds.
    public function run(): void
    {
        // Create 1000 feedback ratings in batches of 10
        $batchSize = 10;
        $totalRecords = 1000;

        for ($createdRecords = 0; $createdRecords < $totalRecords; $createdRecords += $batchSize) {
            FeedbackRating::factory(min($batchSize, $totalRecords - $createdRecords))->forProduct()->forUser()->create();
        }
    }
}
