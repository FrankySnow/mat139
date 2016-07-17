<?php namespace App\Http\Controllers;

use App\Jour;
use App\Intervention;
use App\Http\Requests;
use App\Http\Requests\JourRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Redirect;

class JoursController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$jour = new Jour;
		$jour->equipe = 'C';
		$jour->date = date('Y-m-d');
		$jour->caserne = Jour::last()->caserne;
		
		return view( 'jours.nouveau', compact('jour') );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param JourRequest $req
	 * @return Response
	 */
	public function store( JourRequest $req )
	{
		$jour = Jour::create( $req->all() );
		
		return Redirect::route( 'jours.show', ['jour' => $jour->id] )
			->withMessage("Jour n°{$jour->id} créé.");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Jour  $jour
	 * @return Response
	 */
	public function show( Jour $jour )
	{
		$interventions = $jour->interventions()->desc()->get();
		
		return view( 'jours.jour', compact('jour', 'interventions') );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Jour  $jour
	 * @param  JourRequest  $req
	 * @return Response
	 */
	public function update( JourRequest $req, Jour $jour )
	{		
		$jour->update( $req->all() );
		
		return Redirect::route( 'jours.show', ['jour' => $jour->id] )
			->withMessage("Jour n°{$jour->id} mis à jour.");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
