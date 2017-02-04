<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->layouts->setLayout('layout_base');
		$this->layouts->set_title('Principal');
	}
	public function index()
	{

		$test = $this->test_model->get_last_ten_entries();
		echo var_dump($test);die;
		$this->layouts->view('welcome/index');
	}
	public function test($param) {
	  echo $param;
	}

}
