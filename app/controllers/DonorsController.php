<?php

class DonorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /donors
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /donors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /donors
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$donor = new Donor;
		$donor->name = Input::get('name');
		$donor->phone = Input::get('phone');
		$donor->group = Input::get('group');
		$donor->pin = Input::get('pin');

		if($donor->save())
		{
			return 1;
		}
		else
		{
			return 0;
		}

	}

	/**
	 * Display the specified resource.
	 * GET /donors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	public function find()
	{
		//
		$group = Input::get('group');
		$pin = Input::get('pin');

		$donors = Donor::where('group', '=', $group)->where('pin', '=', $pin)->get();

		if ($donors != NULL)
		{
			echo json_encode($donors);
		}
		else
		{
			echo NULL;
		}

	}
	/**
	 * Show the form for editing the specified resource.
	 * GET /donors/{id}/edit
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
	 * PUT /donors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /donors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}