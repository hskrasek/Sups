<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SupsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(5272835289); // Bonus points if you figure this out

		$userIDs = DB::table('users')->lists('id');
		$types = [
			'Scream',
			'Scary Movie',
			'Hip'
		];
		$contents = [
			'Wazzzuupppp',
			'Wasssssssuppppppp',
			'Sup'
		];


		foreach(User::all() as $user)
		{
			$previousReciever = 0;
			foreach (range(1, mt_rand(1, 10)) as $index)
			{
				$previousReciever = $userIDs[array_rand($userIDs)];
				$type = array_rand($types);
				$user->supsRecieved()->save(new Sup([
					'uuid' => $faker->unique()->uuid,
					'type' => $types[$type],
					'content' => $contents[$type],
					'user_id' => $previousReciever
				]));
			}
		}
	}

}