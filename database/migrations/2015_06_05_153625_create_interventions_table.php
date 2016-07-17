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
			
			$table->increments('id')->comment('Numéro d\'intervention');
			$table->date('date')->comment('Date de la prise de service');
			$table->char('caserne',1)->nullable()->comment('Caserne de départ');
			$table->string('role',20)->nullable()->comment('Rôle dans le véhicule');
			$table->string('vehicule',50)->nullable()->comment('Véhicule');
			$table->string('typologie',50)->comment('Motif de départ');
			$table->string('categorie',20)->comment('Catégorie d\'évènement finale');
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
