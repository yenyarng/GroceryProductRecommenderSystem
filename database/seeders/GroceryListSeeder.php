<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroceryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('grocerylists')->insert([
        //     'user_id' => 4,
        //     'user_pax' => 2,
        //     'meal_num' => 1,
        // ]);
        // DB::table('grocerylists')->insert([
        //     'user_id' => 2,
        //     'user_pax' => 2,
        //     'meal_num' => 2,
        // ]);
        // DB::table('grocerylists')->insert([
        //     'user_id' => 3,
        //     'user_pax' => 2,
        //     'meal_num' => 1,
        // ]);

        DB::table('grocerylists')->insert([
            'user_id' => 7,
            'user_pax' => 5,
            'meal_num' => 2,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 8,
            'user_pax' => 5,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 9,
            'user_pax' => 4,
            'meal_num' => 2,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 10,
            'user_pax' => 4,
            'meal_num' => 2,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 11,
            'user_pax' => 4,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 12,
            'user_pax' => 4,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 13,
            'user_pax' => 3,
            'meal_num' => 2,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 14,
            'user_pax' => 3,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 15,
            'user_pax' => 3,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 16,
            'user_pax' => 2,
            'meal_num' => 1,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 17,
            'user_pax' => 2,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 18,
            'user_pax' => 2,
            'meal_num' => 3,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 19,
            'user_pax' => 1,
            'meal_num' => 1,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 20,
            'user_pax' => 1,
            'meal_num' => 1,
        ]);
        DB::table('grocerylists')->insert([
            'user_id' => 21,
            'user_pax' => 1,
            'meal_num' => 2,
        ]);
    }
}
