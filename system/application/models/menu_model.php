<?php

class Menu_model extends Model {

    var $title   = '';
    var $content = '';
    var $date    = '';
    private $tableName = "system_pages";
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_menu($type)
    {
    	$query = $this->db->order_by('order', 'asc');
        $query = $this->db->get_where($this->tableName, array('menu' => $type));
        
        return $query->result();
    }
}

?>