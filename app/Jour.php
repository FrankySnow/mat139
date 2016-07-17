<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jour extends Model {
	protected $guarded = ['id'];
	
	#protected $touches = ['interventions'];
	
	public function scopeDesc ( $q ) {
		return $q->orderBy('id', 'desc');
	}

	public function scopeLast ( $q ) {
		return $q->orderBy('id', 'desc')->first();
	}
	
	public function interventions(){
		return $this->hasMany('App\Intervention', 'date', 'date');
	}
}
