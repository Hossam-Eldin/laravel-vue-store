<?php

use Illuminate\Database\Seeder;
use App\Products;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Products::truncate();
        $productsQuantity = 100;
        factory(Products::class, 100)->create();

    }
}
