<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Bill;
use App\AuditInfo;

class CheckController extends Controller {

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bill = Bill::where('bill_id', $id)->get()[0];
		$user_id = session('user_id');
		return view('audit.check', compact('id', 'bill', 'user_id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Request $request
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
		if ($request->has('pass')) {
			return CheckController::pass($id);
		}
		return 'no';
	}

	private function pass($id)
	{
		$rec = AuditInfo::where('bill_id', $id)
		                ->orderBy('date', 'desc')
										->first();
		return $rec.'haha';
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
