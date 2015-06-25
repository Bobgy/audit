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
	 *
	 * @param	int	$id
	 * @return Response
	 */
	public function show($id) {
		$bill = Bill::find($id);
		$state = Bill::formatState($bill->audit_state);
		return view('audit.check', compact('id', 'bill', 'state'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param	Request $request
	 * @param	int	$id
	 * @return Response
	 */

	protected function goBack() {
		$lastURI = session('lastURI');
		if (!is_null($lastURI)) return redirect()->away($lastURI);
		return redirect('main');
	}

	public function edit(Request $request, $id) {
		if ($request->has('pass')) {
			return $this->pass($id);
		} else if ($request->has('reject')) {
			return $this->reject($id);
		} else if ($request->has('back')) {
			return $this->goBack();
		}
		return $this->show($id);
	}

	private function pass($id) {
		$prevStat = Bill::find($id)->audit_state;
		$audit = new AuditInfo;
		switch ($prevStat) {
			case 0: case 1:
				$audit->action = $prevStat + 1;
				break;
			case 3:
				$audit->action = 0;
				break;
			default:
				$errorMessage = '错误: 无效的操作';
				return $this->showWithError($id, $errorMessage);
		}
		$audit->bill_id = $id;
		$audit->auditor_id = session('user_id');
		$audit->date = date("Y-m-d H:i:s");
		# $audit->comment = something;
		$audit->save();
		return $this->goBack();
	}

	private function reject($id) {
		$prevStat = Bill::find($id)->audit_state;
		$audit = new AuditInfo;
		switch ($prevStat) {
			case 0: case 1: case 2:
				$audit->action = 3;
				break;
			default:
				$errorMessage = '错误: 无效的操作';
				return $this->showWithError($id, $errorMessage);
		}
		$audit->bill_id = $id;
		$audit->auditor_id = session('user_id');
		$audit->date = date("Y-m-d H:i:s");
		# $audit->comment = something;
		$audit->save();
		return $this->goBack();
	}

	private function showWithError($id, $errorMessage) {
		$bill = Bill::find($id);
		$state = $bill->formatState($bill->audit_state);
		return view('audit.check', compact('errorMessage', 'id', 'bill', 'state'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param	int	$id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param	int	$id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
