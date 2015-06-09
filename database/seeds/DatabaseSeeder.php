<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('BillTableSeeder');
		$this->command->info('User table seeded!');
	}

}

class BillTableSeeder extends Seeder {

  public function run()
  {
		DB::delete('delete from bills');
    $str = <<<COMMAND
INSERT INTO `audit`.`bills`
(`bill_id`, `seller_id`, `buyer_id`, `commodity_name`, `amount`, `date`)
VALUES (?, ?, ?, ?, ?, '2015-06-11 00:00:00');
COMMAND;
    for ($i = 0; $i < 100; $i ++){
      DB::insert($str, [$i,$i,$i,$i,$i]);
    }
  }

}
