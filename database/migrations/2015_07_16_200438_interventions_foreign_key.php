<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InterventionsForeignKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('interventions', function(Blueprint $table)
		{
			$table->foreign('date')
				  ->references('date')
				  ->on('jours')
				  ->onUpdate('cascade')
				  ->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('interventions', function(Blueprint $table)
		{
			#$table->dropForeign('interventions_date_foreign');
		});
	}

}
