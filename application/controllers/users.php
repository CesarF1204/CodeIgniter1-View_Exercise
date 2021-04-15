<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	//view exercise
	public function index() {
		echo "I am Users Class!";
	}
	public function say($anything_url) {
		$arr = array('anything_url' => $anything_url);
		$this->load->view('users/say.php', $arr);
	}
	public function say_times($anything_url, $times) {
		$arr = array('anything_url' => $anything_url, 'times' => $times);
		if(!is_numeric($times)) {
			echo 'Sorry. This url does not meet our requirement.';
		} else {
			for($i = 1; $i < $times; $i++){
				echo $anything_url.'<br>';
			}
			$this->load->view('users/say.php', $arr);
		}
	}
	public function mprep() {
        $view_data = array(
        	'name' => "Cesar Francisco",
          	'age'  => 25,
           	'location' => "Baguio City, Philippines",
           	'hobbies' => array( "Coding", "Gaming", "Movies", "Anime",)
       	);
       	$this->load->view('users/mprep', $view_data);
     }

}