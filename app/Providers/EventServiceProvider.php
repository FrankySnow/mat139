<?php namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use App\Intervention;
use App\Jour;
use Log;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [
			'EventListener',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);
		
		/**
		 * Pour empêcher de pouvoir créer une inter non associée à un jour
		 * 
		 * @param Intervention $inter
		 * 
		 * @return bool
		 */
		/*Intervention::saving(function( $inter ){
			$jour = $inter->jour;
			if($jour === NULL) return false;
			Log::info("Sauvegarde de l'intervention acceptée.");
			return true;
		});*/
		
		/**
		 * Une fois l'inter enregistrée, mettre à jour le compteur dans Jours
		 * 
		 * @param Interventions $inter
		 * 
		 * @return bool
		 */
		Intervention::saved(function( $inter ){
			$jour = $inter->jour;
			
			$jour->nb_inter = $jour->interventions()->count();
			Log::info("Intervention n°{$inter->id} sauvegardée. Jour n°{$jour->id} mis à jour.");
			return $jour->save();
		});
		
		/*Jour::updating(function( $jour ){
			#$jour->nb_inter = $jour->interventions()->count();
			#return $jour->save();
			return true;
		});*/
	}

}
