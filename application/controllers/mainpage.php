<?php if (!defined('BASEPATH')) die();
class Mainpage extends Main_Controller {
   //Global Methods
   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}
    public function comments()
    {
        $this->load->view('include/header');
        $this->load->view('include/footer');
    }
    //Local Methods
    public function _localMethod(){

    }


   
}

