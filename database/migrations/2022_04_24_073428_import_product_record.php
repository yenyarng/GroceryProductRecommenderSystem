<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Services\ReadCsvFile;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // only works for windows :(
        $path = storage_path('data/GroceryProductData.csv');

        $outputArr = (new ReadCsvFile())->getCsvData($path); //array

        array_shift($outputArr);

        foreach ($outputArr as $value) {
            info($value[0]); //product name
            info($value[1]); //product overview
            info($value[2]); //product image path
            info($value[3]); //product desc
            info($value[4]); //product category id

            Product::create([
                'name' => trim($value[0]),
                'overview' => trim($value[1]),
                'image_path' => trim($value[2]),
                'desc' => trim($value[3]),
                'product_category_id' => trim($value[4]),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
