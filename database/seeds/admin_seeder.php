<?php

use Illuminate\Database\Seeder;

class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		$limit = 4;
		$no = 1;
		for($i = 0 ; $i<$limit ; $i++){
			DB:table('admin)->insert([
			'nama'=>faker->name,
			'ipv4'=>$no,
			]);
			$no++;
		}
    }
}
