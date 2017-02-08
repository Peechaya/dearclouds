<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	 public function run()
    {
        DB::table('users')->insert([
						'username' => 'Peechaya',
            'email' => 'bluewatermelon@free.fr',
            'password' => Hash::make('poney'),
						'role' => 'admin',
						'created_at' => '2017-02-08',
						'updated_at' => '2017-02-08',
        ]);
    }

}
