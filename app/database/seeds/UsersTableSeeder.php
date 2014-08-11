<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(5272835289); // Bonus points if you figure this out

		foreach(range(1, 30) as $index)
		{
			User::create([
				'uuid' => $faker->unique()->uuid,
				'email' => $faker->unique()->email,
				'name' => $faker->name,
				'username' => $faker->unique()->username,
				'password' => Hash::make('supsapi!'),
				'long' => $faker->longitude,
				'lat' => $faker->latitude
			]);
		}
	}

}