<?php

class User_model extends MY_Model {
    public $has_many = array('questions', 'answers');
}