<?php
class Dashboard extends CI_Controller {


    public function index()
    {
		$this->load->view('Home');
	}
    public function about()
    {
        $this->load->view('About');
    }
    public function contact()
    {
        $this->load->view('Contact');
    }

   


}