<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Local server Data Base configuration

 * @filesource
 */


//TABLE INFO


$database_tables = array(
    'HOSTNAME' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'interview',    
    'TBL_AAUTH_USERS' => 'users'    
);

$config['DB_TABLES'] = $database_tables;

/* End of file db.constants.php */
/* Location: ./application/config/db.constants.php */