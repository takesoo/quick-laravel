<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('
            INSERT INTO books (isbn, title, price, publisher, published) 
                VALUES
                ("111-1-1111-1111-1", "1111", 1000, "出版社1", "2020-01-01"),
                ("222-2-2222-2222-2", "2222", 2000, "出版社2", "2020-02-02")
        ');
    }
}
