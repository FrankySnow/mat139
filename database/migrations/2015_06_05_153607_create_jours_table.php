<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jours', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			
			$table->increments('id')->comment('Num�ro de jour');
			$table->date('date')->unique()->comment('Date de la prise de service');
			$table->char('caserne',1)->nullable()->comment('Caserne de service');
			$table->char('equipe',1)->comment('�quipe');
			$table->string('role_1',20)->nullable()->comment('R�le principal');
			$table->string('role_2',20)->nullable()->comment('R�le secondaire/repas');
			$table->tinyInteger('nb_inter')->unsigned()->nullable()->comment('Nombre d\'interventions');
			$table->text('remarques')->nullable()->comment('Remarques');
			$table->decimal('heures_sup',4,2)->nullable()->comment('Heures suppl�mentaires');
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
		Schema::drop('jours');
	}

}
