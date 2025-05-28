<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "product_name" => "coca",
                "product_qty" => 10,
                "product_price" => 0.50,
                "product_desc" => "Cocacola is very powerfull",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "water",
                "product_qty" => 20,
                "product_price" => 0.50,
                "product_desc" => "This is water",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "red sting",
                "product_qty" => 5,
                "product_price" => 1,
                "product_desc" => "Pherk hx kat jerng",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "yellow sting",
                "product_qty" => 15,
                "product_price" => 1,
                "product_desc" => "Pherk hx kat jerng",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Vital",
                "product_qty" => 10,
                "product_price" => 2.50,
                "product_desc" => "This is vital",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];

        DB::table("products")->insert($products);
    }
}
