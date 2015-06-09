<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	//
	public function index(Request $req)
	{
		$password = $req->input('inputPassword');
		if($password)return $password;
		$a = $req->all();
		if($a)return $a;
		return view('audit.index');
	}

	public function check()
	{
		return view('audit.check');
	}

	public function check_list()
	{
		return view('audit.check_list');
	}

	public function fetch()
	{
		return view('audit.fetch');
	}

	public function main()
	{
		return view('audit.main');
	}

	public function register()
	{
		return view('audit.register');
	}

	public function search()
	{
		return view('audit.search');
	}
}
