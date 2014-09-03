<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class manage_users extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    //redirect if needed, otherwise display the user list
    function index() {
        
        $this->session->userdata('users_search_term') == '' ? $search_term = '' : $search_term = $this->session->userdata('users_search_term');
        $this->session->userdata('per_page') == '' ? $per_page = '10' : $per_page = $this->session->userdata('per_page');
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //change model name if required
        $query = $this->user_model->get_all(null, null, $search_term);
        $per_page = 1;
        $total_rows = $query->num_rows();
        $config = array();
        $config['base_url'] = site_url('manage_users/index');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;
        $config['num_links'] = 9;
        $this->pagination->initialize($config);
        //change model name if required
        $data['query'] = $this->user_model->get_all($per_page, $page, $search_term);
        //echo  $this->db->last_query();
        //print_r($data['query']->result());
        $data['total_rows'] = $total_rows;
        $data['links'] = $this->pagination->create_links();
        //change table header if required
        $data['tbl_header'] = array('#', 'Name', 'Email', 'Action', '');
        $data['tbl_title'] = "List of Users";
        $data['action_url'] = 'manage_users/';
        $data['menu'] = 'manage_users';
        $data['title'] = "List of Users";
        
        //set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');        
        $data['main_content'] = $this->load->view('list_view', $data, true);
        echo Modules::run('templates/admin_template', $data);
    }

}
