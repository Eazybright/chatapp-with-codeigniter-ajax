<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(['Dashboard_model', 'Chat_model', 'User_model']);
        $this->dashboard = $this->Dashboard_model;
        $this->chat = $this->Chat_model;
        $this->user = $this->User_model;

        checkSession();
    }

    public function index()
    {
        /* Get all chatroom */
        $data['record'] = $this->user->get($this->session->userdata('user_id'));

        $this->template->load('template/main_template', 'dashboard/index', $data);
        // $this->load->view('dashboard/index', $data);
    }
}
