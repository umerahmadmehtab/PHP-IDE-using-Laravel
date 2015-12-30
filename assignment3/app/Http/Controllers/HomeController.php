<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}


	public function codes(){
		$codes = Code::all();

		return view('Pages.codes')->withCodes($codes);
	}
	/**
	 * returns ide page
	 * @return \Illuminate\View\View
	 */
	public function showIde(){
		return view('Pages.ide');
	}


	/**
	 * @param Request $request
	 * @return $this
	 */
	public function handle(Request $request){

		//save the code to db
		$code = new Code();
		$code->userId = Auth::user()->id;
		$code->code = $request->input('code');

		$code->save();


        $myfile = fopen("newfile.php", "w") or die("Unable to open file!");
        fwrite($myfile, $request->input('code'));
        fclose($myfile);

		//compile and show output
		return view('Partials._output');
	}

}
