<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Bill;

class CheckListController extends Controller {

	protected function check_list_show(Request $request, $state) {
		$page = (isset($request['page']) ? $request['page'] : 1) - 1;
		$bills = Bill::where('audit_state', $state)
		             ->skip($page * 5)->take(5)->get();
		return view('audit.check_list', compact(['bills', 'page']));
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
		$page = (isset($request['page']) ? $request['page'] : 1) - 1;
		$query = Bill::skip($page * 5)->take(5);
		$query = Bill::addQueryIfNotEmpty($query, $request, 'bill_id');
	  $query = Bill::addQueryIfNotEmpty($query, $request, 'buyer_id');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'seller_id');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'date', '>=', 'begin_date');
		$query = Bill::addQueryIfNotEmpty($query, $request, 'date', '<=', 'end_date');
		$bills = $query->get();
		return view('audit.search', compact(['bills']));
	}

}
