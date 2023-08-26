<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_types')->delete();

        DB::table('bank_types')->insert([
            ['title' => 'Commercial Bank',],
            ['title' => 'Development Bank'],
            ['title' => 'Finance'],
            ['title' => 'Micro Finance'],
            ['title' => 'Co-Operatives']
        ]);
    }
}
