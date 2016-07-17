<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model {
	/**
	 * @var array Champs à protéger du mass-assignment
	 */
	protected $guarded = ['id', 'date'];
	
	/**
	 * @var array Nom du modèle que celui-ci "touch" (en cas d'update)
	 */
	protected $touches = ['jour'];

	/**
	 * @var array Champs de la table à caster dans un type donné
	 */
    protected $casts = [
        'code_3' => 'boolean',
        'ARI' => 'boolean',
    ];

	public function scopeDesc ( $q ) {
		return $q->orderBy('id', 'desc');
	}

	public function scopeLast ( $q ) {
		return $q->orderBy('id', 'desc')->first();
	}
	
	public function jour(){
		return $this->belongsTo( 'App\Jour', 'date', 'date' );
	}

}
