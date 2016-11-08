<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

class PromoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = new ParseQuery("Promo");
		$promos = $query->find();
		return view('promo/index',compact('promos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('promo/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		try
		{
			$promo=new ParseObject("Promo");
			//$promo->set("start_date",$request->get('start_date'));
			$promo->set("name",$request->get('name'));
			$promo->set("promo_description",$request->get('promo_description'));
			//$promo->set("end_date",$request->get('end_date'));
			$promo->set("percent",(int)$request->get('percent'));
			$promo->save();
		}
		catch(ParseException $ex)
		{
echo "erreur";
	 	}
	 	echo "ok";
	 	//return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promos = new ParseQuery("Promo");
		$promo = $promos->get($id);
		return view('promo/edit', compact('promo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		try
		{
			$promos = new ParseQuery("Promo");
			$promo = $promos->get($id);
			$promo->set("start_date",$request->get('start_date'));
			$promo->set("name",$request->get('name'));
			$promo->set("promo_description",$request->get('promo_description'));
			$promo->set("end_date",$request->get('end_date'));
			$promo->set("percent",$request->get('percent'));
			$promo->save();
		}
		catch(ParseException $ex)
		{


 		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try
		{
			$promos = new ParseQuery("Promo");
			$promo = $promos->get($id);
			$promo->destroy();
		}
		catch(ParseException $ex){
		}
		return back();
	}


}
