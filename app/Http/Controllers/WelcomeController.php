<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return view('welcome');
		return view('portfolio');
	}

	public function portfolioQuestion(Request $request)
	{
		//return $request->all();
		/*
		Mail::send('emails.question', ['request' => $request  ], function ($m) use ($request) {
				$m->from('onboard@happychild.es', 'Portfolio - Developer');
				$m->to('juangiraldo222@gmail.com', 'Juan Giraldo')->subject($request->messaje);
				//$m->to($user->email, $user->name)->subject('Bienvenido a HappyChild');
		});

		return response()->json([
				'message' => 'Thanks for your question. I will reply very soon'
		]);
		*/
	}

}
