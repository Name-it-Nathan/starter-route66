<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juliet
 *
 * @author Owner
 */
class Juliet extends CI_Controller {
    //put your code here
    
    function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}
