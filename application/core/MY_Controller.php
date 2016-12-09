<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('parser');
    }
    
    public function render($view, $data = []) {
		$this->load->view('layouts/app', array(
		    'subview' => $view, $data
		));
    }
    
    public function parser($view, $data = []) {
        $this->load->view('layouts/app', array(
		    'html' => $this->parser->parse($view, $data, TRUE)
		));
    }
}