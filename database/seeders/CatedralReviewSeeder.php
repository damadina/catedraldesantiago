<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CatedralReview;
use Database\Seeders\Catedralreview as SeedersCatedralreview;

class CatedralReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatedralReview::factory(150)->create();
    }
}
