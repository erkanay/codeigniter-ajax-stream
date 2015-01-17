<?php if(!defined('BASEPATH')) exit('direct script not allowed ! ');
/**
 * Streams Class
 *
 * @package	Streams.php
 * @category	Ajax
 * @author	Erkan Ay
 * 
 *
 */
class Streams extends CI_Controller{
    /**
     * constructor method
     * 
     * 
     */
    public function __construct(){
        //call parent
        parent::__construct();
        //call the model
        $this->load->model('streams_model');
        //import the needed classes
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('parse');//template engine etc.
    }
    /**
     * index method
     *
     * @param string $page
     *
     */
    public function index($page = 'index'){
        if(!file_exists(APPPATH.'views/'.$page.'.php')){
            //show 404 page
            show_404();
        }
    }
}
