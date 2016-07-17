<?php namespace App\Http\Controllers;

use App\Jour;
use App\Intervention;
use App\Http\Requests;
use App\Http\Requests\InterventionRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Redirect;

class InterventionsController extends Controller {

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
	 * Vérifie la correspondance entre un jour et une inter
	 * @param Jour $jour
	 * @param Intervention $inter
	 * @return bool
	 */
	public function vérifieCorrespondance ( Jour $jour, Intervention $inter )
	{
		if( $inter->jour->id <> $jour->id ) {
			abort(404,"Le jour et l'intervention ne correspondent pas.");
		} 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param Jour $jour
	 * @return Response
	 */
	public function create( Jour $jour )
	{
		$intervention = new Intervention;
		$intervention->caserne = $jour->caserne;
		$intervention->role = $jour->role_1;
		
		return view('interventions.nouvelle', compact('jour', 'intervention' ));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param InterventionRequest $req
	 * @param Jour $jour
	 * @return Response
	 */
	public function store( InterventionRequest $req, Jour $jour )
	{
		$intervention = $jour->interventions()->create( $req->all() );
		
		return Redirect::route( 'interventions.show',
			['jour' => $jour->id , 'inter' => $intervention->id] )
			->withMessage("Intervention n°{$intervention->id} créée.");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show( Jour $jour, Intervention $intervention )
	{		
		$this->vérifieCorrespondance( $jour, $intervention );
		
		return view( 'interventions.intervention', compact('jour', 'intervention') );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit( )
	{
		// show
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( InterventionRequest $req, Jour $jour, Intervention $intervention )
	{		
		#dd($req->all( ));
		$this->vérifieCorrespondance( $jour, $intervention );
		
		$intervention->update( $req->all() );
		$intervention->jour->touch();
		
		return Redirect::route( 'interventions.show',
			['jour' => $jour->id , 'inter' => $intervention->id] )
			->withMessage("Intervention n°{$intervention->id} mise à jour.");
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
