<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('
            INSERT INTO `reviews`
                (`book_id`, `name`, `body`) 
            VALUES 
                (1, "reviewer1", "レビュー１を書いてみました"),
                (1, "reviewer2", "レビュー2を書いてみました"),
                (1, "reviewer3", "レビュー3を書いてみました")
        ');
    }
}
