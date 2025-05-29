<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                "cus_fname" => "Somonor",
                "cus_lname" => "Hong",
                "cus_email" => "somonor@gmail.com",
                "cus_phonenumber" => "011293078",
                "cus_address" => "Phnom Penh , Cambodia",
                "created_at" => now(),
                "updated_at"=> now(),
            ]
        ];

        DB::table("customers")->insert($customers);
    }
}
