<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ManagerInfo;
use App\Bill;

class PageController extends Controller {

	public function getLogin() {
			return view('audit.index');
	}

	 // 登录操作
	public function postLogin(Request $request) {

		if (!is_null(session('user_id'))) return redirect('main');

		$user_id = $request->get('_inputAccount');
		$password = $request->get('_inputPassword');
		$manager = ManagerInfo::find($user_id);
		$true_password = $manager['password'];
		if (!is_null($manager) && $password == $true_password) {
			session(['user_id' => $user_id]);
			return redirect('main');
		}
		$errorMessage = '用户名/密码不匹配';
		return view('audit.index', compact(['errorMessage']));
	}
        
	// 登出操作
	public function getLogout() {
		session()->forget('user_id');
		return redirect('/');
	}
	public function index(Request $request) {
		if (session('user_id')!=NULL) return redirect('main');
		return view('audit.index');
	}

	public function check() {
		return view('audit.check');
	}

	public function fetch()
	{
		return view('audit.fetch');
	}

	public function resetPassword(Request $request)
	{
		$oldPassword = $request->get('oldPassword');
		$newPassword = $request->get('newPassword');
		$confirmPassword = $request->get('confirmPassword');
		$manager = ManagerInfo::find(session('user_id'));
		if ($oldPassword != $manager['password']) {
			$errorMessage = '密码错误';
			return view('audit.fetch', compact('errorMessage'));
		} else if ($newPassword != $confirmPassword) {
			$errorMessage = '两次输入的密码不一致';
			return view('audit.fetch', compact('errorMessage'));
		}
		$manager->password = $newPassword;
		$manager->save();
		session()->forget('user_id');
		return view('audit.index');
	}

	public function main(Request $request)
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
}
