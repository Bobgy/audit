<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ManagerInfo;

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
		$user_id = $request->get('_inputAccount');
		$password = $request->get('_inputPassword');

		$true_password = ManagerInfo::find($user_id)['password'];

		if ($password == $true_password) {
			session(['user_id' => $user_id]);
			return redirect('main');
		}

		session()->forget('user_id');

   	return back()->withInput();
  }

	//
	public function index(Request $request)
	{
		$password = $request->input('inputPassword');
		if ($password) return $password;
		return view('audit.index');
	}

	public function check()
	{
		return view('audit.check');
	}

	public function check_list()
	{
		if (!session()->has('user_id')) return redirect('/');
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
