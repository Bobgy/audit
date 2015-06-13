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
		Schema::create('audit_infos', function(Blueprint $table)
		{
			$table->string('audit_id', 30);
			$table->string('bill_id', 30);
			$table->string('auditor_id', 30);
			$table->dateTime('date');
			$table->integer('action'); // 1->pass, 0->not pass
			$table->string('comment', 120);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('audit_infos');
	}

}
