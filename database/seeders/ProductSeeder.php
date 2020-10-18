<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG Mobile',
            "price"=>"10000",
            "description"=>"a Smartphone with 4 GB Ram",
            'category'=>'mobile',
            'gallery'=>'https://m.media-amazon.com/images/I/81UhYiZH98L.jpg'
            ],
            [
                'name'=>'Samsung Mobile',
                "price"=>"10000",
                "description"=>"a Smartphone with 4 GB Ram",
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/41Hj2m3V9LL._AC_SR160,160_.jpg'
            ],
            [
                'name'=>'Nokia Mobile',
                "price"=>"10000",
                "description"=>"a Smartphone with 4 GB Ram",
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/31D8LXkqjoL._AC_SR160,160_.jpg'
            ],
            [
                'name'=>'MI Mobile',
                "price"=>"10000",
                "description"=>"a Smartphone with 4 GB Ram",
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/41hMneamRfL._AC_SR160,160_.jpg'
            ]]
    );
    }
}
