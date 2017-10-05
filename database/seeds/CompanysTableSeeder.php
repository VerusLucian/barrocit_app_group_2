<?php

use Illuminate\Database\Seeder;

class CompanysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();
        for ($i = 0; $i < 8; $i++)
        {
        DB::table('tbl_companys')->insert([
            'name' => $faker->create()->sentence(3)
        ]);
        }
    }
}