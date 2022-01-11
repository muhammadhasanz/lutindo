<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Greenfield extends CI_Controller
{

    public function index()
    {
        $this->load->view('lutungan/index');
    }
}
