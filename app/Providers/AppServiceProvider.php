<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Intervention;
use App\Jour;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->share('database', config('database.connections.'.config('database.default').'.database') );
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
