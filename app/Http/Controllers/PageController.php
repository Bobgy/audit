<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ManagerInfo;
class PageController extends Controller {
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
		if ($password == $true_password && !is_null($true_password)) {
			session(['user_id' => $user_id]);
			return redirect('main');
		}
		session()->forget('user_id');
   		return redirect('/');
    }
  // 登出操作
	public function getLogout()
	{
	  	session()->forget('user_id');
	  	return redirect('/');
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
		return view('audit.check_list');
	}
	public function check_list_double()
	{
		return view('audit.check_list_double');
	}
	public function check_list_history()
	{
		return view('audit.check_list_history');
	}
	public function fetch()
	{
		return view('audit.fetch');
	}
	public function main()
	{
		$user_id = session('user_id');
		$manager = ManagerInfo::find($user_id);
		$real_name = $manager['real_name'];
		return view('audit.main', compact('user_id','real_name'));
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
