<?php

class Answer_model extends MY_Model {
    public $belongs_to = array(
        'user',
        'question' => array('primary_key' => 'question_id')
    );
    
    // public function __construct() {
    //     parent::__construct();
    //     $this->_database = $this->db;
    // }
}