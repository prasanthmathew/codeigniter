<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends MY_Model {

    function __construct() {
        parent::__construct();

        $this->_table = $this->config->item('TBL_AAUTH_USERS', 'DB_TABLES');
        $this->primary_key = "id";
    }

    function get_all($offset = null, $limit = null, $search_term = '') {


        if ($offset != null) {
            return $this->db->like('first_name', $search_term)->limit($offset, $limit)->get($this->_table);
        } else {
            return $this->db->like('first_name', $search_term)->get($this->_table);
        }
    }

    function get_one($id) {

        return $this->db->where('id', $id)->get($this->_table);
    }

    


    

}

/* End of file user_model.php */
/* Location: ./application/controllers/user_model.php */
