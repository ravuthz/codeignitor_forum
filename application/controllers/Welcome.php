<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		//debug();
	
		$data = array(
	        'blog_title' => 'My Blog Title',
        	'blog_heading' => 'My Blog Heading',
        	'blog_entries' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
        	)
		);
		
		$this->load->model('user_model');
		$this->load->model('question_model');
		$this->load->model('answer_model');
		
	
		$question1 = $this->question_model->with('user')->get(1);
		$question2 = $this->question_model->with('answers')->get(1);
		$question3 = $this->question_model->with('user')->with('answers')->get(1);
		
		dump($question1);
		dump($question2);
		dump($question3);
		
		$data['questions'] = $this->question_model->get_all();
		
		$this->parser('welcome/index', $data);
	}
}
