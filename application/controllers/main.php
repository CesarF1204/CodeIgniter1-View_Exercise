<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	//routing exercise
	public function index() {
		echo "I am Main Class!";
	}
	public function hello(){
		echo "Hello World!";
	}
	public function say(){
	echo "Hi!";
	}
	public function say_anything($anything_url){
	echo $anything_url;
	}
	public function danger(){
		redirect('/main');
	}
	//view exercise
	public function world(){
		$this->load->view('main/world.php');
	}
	public function ninjas(){
	 	$this->load->view('main/ninjas.php');
	}
	public function ninjas_add($ninja_no){
		$this->load->view('main/ninjas.php');
		$rand_img = rand(1,5);
		for($i = 5; $i < $ninja_no; $i++){
			echo '<img src="/user_guide/_images/ninja'.$rand_img.'.jpg" alt="ninjas">';
		}	
	}
	public function users(){
		$this->load->view('users/index.php');
	}
	public function new(){
		$this->load->view('users/new.php');
	}
	public function users_create(){
		if($this->input->post('action') == 'feature') {
			echo 'This feature is coming soon!';
		} else {
			redirect('/users');
		}
	}
	public function count(){
		$visits = $this->session->userdata('visits');
		$visits++;
		$this->session->set_userdata('visits', $visits);
		echo 'You visited this page '.$visits.' time(s)';
	}
	public function reset(){
		$this->session->unset_userdata('visits');
		$this->load->view('users/reset.php');
	}


}