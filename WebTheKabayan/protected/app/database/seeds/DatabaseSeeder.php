<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TestimonialsTableSeeder');
		$this->call('PemainsTableSeeder');
		$this->call('HomesTableSeeder');
		$this->call('ProfilesTableSeeder');
	}

}