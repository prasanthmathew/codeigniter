<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_model extends MY_Model  {  
    
   public $_table = '';

    function __construct() {
       parent::__construct();
       
       $this->opp_table = $this->config->item('TBL_OPPORTUNITY','DB_TABLES');
       $this->act_table = $this->config->item('TBL_ACTIVITY','DB_TABLES');
       $this->visit_table = $this->config->item('TBL_CUSTOMER_VISIT','DB_TABLES');
       $this->budget_table = $this->config->item('TBL_FINANCIAL_TARGET','DB_TABLES');
       
       $this->current_year = date('Y');
       $this->current_month = date('m');
       
       $start = $this->config->item('QUARTER_START');
       $curqrt = (($this->current_month - $start)/3)+1;
       $quart = 'Q'.$curqrt.'-'.$this->current_year;
       $this->current_quarter = $quart;
    }   
    
    
    
  }
  
  ?>
  