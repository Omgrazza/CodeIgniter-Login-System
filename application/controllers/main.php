<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		// Check if the is logged in and has a active session.
		if ($this->session->user_data('logged_in') == true)
		{
			// Load the index view.
		}
		else
		{
			// Redirect the user to the login page.
			redirect('login', 'refresh');
			// Kill the script to prevent header modification.
			exit();
		}
	}

	public function login()
	{
		// Check if the user is already logged in.
		if ($this->session->userdata('logged_in') == true) {
			// Redirect the user to the index page.
			redirect('index', 'refresh');
			// Kill the script to prevent header modification.
			exit();
		}
		else
		{

		}
	}
}