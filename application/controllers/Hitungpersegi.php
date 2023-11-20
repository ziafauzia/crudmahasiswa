<?php
defined('BASEPATH') or exit('No direct script access allowe');
class Hitungpersegi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('persegi');
    }
    function index()
    {
        $this->Persegi->keliling('10');
        echo "<br/>";
        $this->Persegi->luas('10');
    }
}