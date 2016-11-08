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

class RangeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = new ParseQuery("Range");
		$ranges = $query->find();
		return view('range/index',compact('ranges'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
			$range=new ParseObject("Range");
			$range->set("name",$request->get('name'));
			$range->set("range_description",$request->get('range_description'));
			$range->set("price",$request->get('price'));
			$range->set("cars",$request->get('cars'));
			$range->set("options",$request->get('options'));
			$range->save();
		}
		catch(ParseException $ex)
		{

	 	}
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
		//
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
			$range = new ParseQuery("Range");
			$range = $ranges->get($id);
			$range->set("name",$request->get('name'));
			$range->set("range_description",$request->get('range_description'));
			$range->set("price",$request->get('price'));
			$range->set("cars",$request->get('cars'));
			$range->set("options",$request->get('options'));
			$range->save();
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
			$range = new ParseQuery("Range");
			$range = $ranges->get($id);
			$range->destroy();
		}
		catch(ParseException $ex){
		}
		return back();
	}

}
