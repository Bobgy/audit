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
    $this->call('AuditInfoTableSeeder');
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
    for ($i = 1; $i < 100; $i ++) {
      DB::insert($str, [$i,$i,$i,$i,$i]);
    }
  }
	
}

class AuditInfoTableSeeder extends Seeder {

  public function run()
  {
    DB::delete('delete from audit_info');
    $str = <<<COMMAND
INSERT INTO `audit`.`audit_info`
(`bill_id`, `auditor_id`, `date`, `comment`, `action`)
VALUES (?, ?, ?, 'Testing', ?);
COMMAND;
    for ($i = 1; $i < 100; $i ++) {
      DB::insert($str, [$i, 'Bobgy', '2015-06-11 00:00:00', $i%4]);
    }
    DB::insert($str, [5, 'Bobgy', '2015-06-14 00:00:00', 2]);
  }

}
