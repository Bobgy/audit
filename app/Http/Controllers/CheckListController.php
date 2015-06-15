<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Bill;

class CheckListController extends Controller {

	protected function check_list_show(Request $request, $state) {
		$page = $request['page'] or 1;
		$bills = Bill::where('audit_state', $state)
		             ->skip(($page - 1) * 5)->take(5)->get();
		return view('audit.check_list', compact(['bills']));
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

}
