<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroceryListProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 1,
            'quantity' => 2,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 2,
            'quantity' => 2,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 3,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 4,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 10,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 12,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 50,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 38,
            'quantity' => 1,
        ]);
        DB::table('grocerylist_products')->insert([
            'grocerylist_id' => 3,
            'product_id' => 20,
            'quantity' => 1,
        ]);
    }
}
