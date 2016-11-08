<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Parse\ParseQuery;
use Parse\ParseException;
use Parse\ParseObject;
use DateTime;
use Carbon\Carbon;
class ReservationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		$query = new ParseQuery("Reservation");
		try {
		  $reservations = $query->find();
		  return view('reservation/index',compact('reservations'));
		} catch (ParseException $ex) {
		   throw new Exception('Failed to retrive list reservation, with error message: ' + $ex->getMessage());
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('reservation/create',compact('reservation'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		try {
		
			$reservation = ParseObject::create("Reservation");
			$reservation->set("range",$request->get("range"));
			$reservation->set("user",$request->get("user"));
			$reservation->set("date",$request->get("date"));
			$reservation->set("start_date",$request->get("start_date"));
			$reservation->set("end_date",$request->get("end_date"));
			$reservation->set("from_adr",$request->get("from_adr"));
			$reservation->set("to_adr",$request->get("to_adr"));
			$reservation->set("price",$request->get("price"));
			$reservation->set("promos",$request->get("promos"));
			
			$reservation->save();
		} catch (ParseException $ex) {
		   throw new Exception('Failed to create new reservation, with error message: ' + $ex->getMessage());
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
		$query = new ParseQuery("Reservation");
		try {
		  	$reservation = ParseObject::create("Reservation");
			$reservation->set("range",$request->get("range"));
			$reservation->set("user",$request->get("user"));
			$reservation->set("date",$request->get("date"));
			$reservation->set("start_date",$request->get("start_date"));
			$reservation->set("end_date",$request->get("end_date"));
			$reservation->set("from_adr",$request->get("from_adr"));
			$reservation->set("to_adr",$request->get("to_adr"));
			$reservation->set("price",$request->get("price"));
			$reservation->set("promos",$request->get("promos"));
			
			$reservation->save();
		} catch (ParseException $ex) {
		   throw new Exception('Failed to update reservation, with error message: ' + $ex->getMessage());
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
		$query = new ParseQuery("Reservation");
		try {
		  	$reservation = $query->get($id);
			$reservation->destroy();
		} catch (ParseException $ex) {
		   throw new Exception('Failed to delete reservation, with error message: ' + $ex->getMessage());
		}
		return back();
	}

}
