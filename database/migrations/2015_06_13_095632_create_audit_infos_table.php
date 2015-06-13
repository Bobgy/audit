<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audit_info', function(Blueprint $table)
		{
			$table->increments('audit_id');
			$table->string('bill_id', 30);
			$table->string('auditor_id', 30);
			$table->dateTime('date');
			$table->string('comment', 140);

			// 0->unprocessed, 1->double_check, 2->pass, 3->error
			$table->integer('action');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('audit_info');
	}

}
