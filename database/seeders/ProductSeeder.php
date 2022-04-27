<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => "Coca-cola (320ml)",
            'image_path' => 'https://www.pantryexpress.my/1144-thickbox_default/coca-cola-carbonated-drinks-320ml-x-24.jpg',
            'desc' => "Isotonic Drinks",
            'overview' => "Isotonic Drinks. Cola is a carbonated soft drink flavored with vanilla, cinnamon, citrus oils and other flavorings. Cola became popular worldwide after pharmacist John Pemberton invented Coca-Cola, a trademarked brand, in 1886, which was later imitated by other manufacturers.",
            'product_category_id' => 1,
        ]);
    }
}
