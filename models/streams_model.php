<?php if(!defined('BASEPATH')) exit('direct script not allowed ! ');
/**
 * Streams_model Class
 *
 * @package	  Streams_model.php
 * @category	Ajax
 * @author	  Erkan Ay
 * 
 *
 */
class Streams_model extends CI_Model{
    /**
     * constructor method
     *
     *
     */
    public function __construct(){
        //load db
        $this->load->database();
    }
    /**
     * get_categories method
     *
     *
     */
    public function get_categories(){
        $query = $this->db->get('categories');
        return $query->result_array();
    }
}
