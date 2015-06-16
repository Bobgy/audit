<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Bill;
use DB;

class CheckListController extends Controller {

	protected function check_list_show(Request $request, $state) {
		session(['lastURI' => $request->getRequestUri()]);
		$page = (isset($request['page']) ? $request['page'] : 1) - 1;
		$bills = Bill::where('audit_state', $state)
		             ->skip($page * 5)->take(5)->get();
		$billCount = Bill::where('audit_state', $state)->count();
		$pageTotal = (int) (($billCount + 4) / 5);
		return view('audit.check_list', compact(['bills', 'page', 'pageTotal']));
	}

	public function check_list(Request $request) {
		return $this->check_list_show($request, 0);
	}

	public function check_list_double(Request $request) {
		return $this->check_list_show($request, 1);
	}

	public function check_list_history(Request $request) {
		return $this->check_list_show($request, 2);
	}

	public function check_list_error(Request $request) {
		return $this->check_list_show($request, 3);
	}

	public function search(Request $request) {
		$uri = $request->getRequestUri();
		session(['lastURI' => $uri]);
		$page = (isset($request['page']) ? $request['page'] : 1) - 1;
		$query = DB::table('bills');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'bill_id');
	  	$query = Bill::addQueryIfNotEmpty($query, $request, 'buyer_id');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'seller_id');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'date', '>=', 'begin_date');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'date', '<=', 'end_date');
		$billCount = $query->count();
		$pageTotal = (int) (($billCount + 4) / 5);
		$bills = $query->skip($page * 5)->take(5)->get();
		return view('audit.search', compact(['bills', 'pageTotal', 'page']));
	}

}
