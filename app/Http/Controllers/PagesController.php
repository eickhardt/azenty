<?php namespace App\Http\Controllers;

class PagesController extends Controller {

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
	 * Show the home page.
	 *
	 * @return Response
	 */
	public function showHome()
	{
		return view('pages.home');
	}

	/**
	 * Show the products pages.
	 *
	 * @return Response
	 */
	public function showHardware()
	{
		return view('pages.hardware');
	}
	public function showWebshops()
	{
		return view('pages.webshops');
	}
	public function showEmarketing()
	{
		return view('pages.e-marketing');
	}
	public function showGoogleInfrastructure()
	{
		return view('pages.google-infrastructure');
	}

	/**
	 * Show the references page.
	 *
	 * @return Response
	 */
	public function showReferences()
	{
		return view('pages.references');
	}

	/**
	 * Show the references page.
	 *
	 * @return Response
	 */
	public function showJobs()
	{
		return view('pages.jobs');
	}

	/**
	 * Show the about page.
	 *
	 * @return Response
	 */
	public function showAbout()
	{
		return view('pages.about');
	}

	/**
	 * Show the contact page.
	 *
	 * @return Response
	 */
	public function showContact()
	{
		return view('pages.contact');
	}

	/**
	 * Show the Omnichannel page.
	 *
	 * @return Response
	 */
	public function showOmnichannel()
	{
		return view('pages.omnichannel');
	}

	/**
	 * Show the webshop B2B page.
	 *
	 * @return Response
	 */
	public function showWebshopB2B()
	{
		return view('pages.webshopsb2b');
	}
}
