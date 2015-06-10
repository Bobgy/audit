<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function showProfile(Request $request)
	{
		//$value = $request->session()->get('key');
		return $request->session()->all();
		//
	}
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function getLogin()
  {
      return view('audit.index');
  }

   // 登录操作
  public function postLogin(Request $request)
  {
  	// 加入获取信息
  	// if correct
		$a = $request->all();
		if($a)return $a;
   	return redirect('main');
   	// else
   	// return back()->withInput();
  }

	//
	public function index(Request $request)
	{
		$password = $request->input('inputPassword');
		if($password)return $password;
		return view('audit.index');
	}

	public function check()
	{
		return view('audit.check');
	}

	public function check_list()
	{
		$user_id = session('user_id');
		if($user_id)return view('audit.check_list');
		return redirect("/");
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
