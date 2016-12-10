<?php

class Question_model extends MY_Model {
    public $belongs_to = array('user');
    public $has_many = array(
        'answers' => array(
            'primary_key' => 'question_id',
            'model' => 'answer_model'
        )
    );
    
    // public function __construct() {
    //     parent::__construct();
    //     $this->_database = $this->db;
    // }
}