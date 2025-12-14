<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Geospasial Halal (SIG-HALAL) Sawangan' 
        );
        $this->load->view('web/home', $data);
    }
}