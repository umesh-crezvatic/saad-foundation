<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function index()
    {
        $this->load->view('front/project');
    }

    public function drushti()
    {
        $this->load->view('front/project_drushti');
    }

    public function aarogya()
    {
        $this->load->view('front/project_aarogya');
    }

    public function manav()
    {
        $this->load->view('front/project_manav');
    }

    public function sabla()
    {
        $this->load->view('front/project_sabla');
    }

    public function jagruti()
    {
        $this->load->view('front/project_jagruti');
    }
}

/* End of file Project.php */
