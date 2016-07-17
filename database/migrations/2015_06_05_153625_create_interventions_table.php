<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interventions', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id')->comment('Num�ro d\'intervention');
			$table->date('date')->comment('Date de la prise de service');
			$table->char('caserne',1)->nullable()->comment('Caserne de d�part');
			$table->string('role',20)->nullable()->comment('R�le dans le v�hicule');
			$table->string('vehicule',50)->nullable()->comment('V�hicule');
			$table->string('typologie',50)->comment('Motif de d�part');
			$table->string('categorie',20)->comment('Cat�gorie d\'�v�nement finale');
			$table->string('adresse',50)->nullable()->comment('Adresse finale');
			$table->string('commune',20)->nullable()->comment('Commune');
			$table->text('remarques')->nullable()->comment('Remarques');
			$table->boolean('code_3')->comment('Conduite avec signaux prioritaires');
			$table->boolean('ARI')->comment('Utilisation de l\'ARI');
			$table->timestamps(); # created_at + updated_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('interventions');
	}

}
