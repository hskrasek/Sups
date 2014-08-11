<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if (App::environment() == 'production')
		{
			exit("Trying to get fired are we?");
		}

		$tables = [
			'users',
			'sups',
			'sup_user'
		];

		foreach ($tables as $table)
		{
			DB::table($table)->truncate();
		}

		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('SupsTableSeeder');
	}

}
