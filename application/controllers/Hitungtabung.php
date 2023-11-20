<?php
defined('BASEPATH') or exit('No direct script access allowe');

class Hitungtabung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }
    function index()
    {
        $this->tabung->rumus('5', '3');
       
    }
}