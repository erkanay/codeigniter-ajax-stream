<?php if(!defined('BASEPATH')) exit('direct script not allowed ! ');
/**
 * Streams_model Class
 *
 * @package	  Streams_model.php
 * @category      Ajax
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
     * @return array $result_array
     *
     */
    public function get_categories(){
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    /**
     * save_post method
     *
     * @param boolean $state : control_post()
     * @return boolean true | false
     * 
     */
    public function save_post($state = true){
        try{
            if($state == false){
                $data = array(
                    'post' => $this->input->post('post'),
                    'category_id' => $this->input->post('category'),
                    'post_time' => $date('Y:M:D')
                );
                $query = $this->db->save('posts',$data);
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            return false;
        }
    }
    /**
     * update_post method
     *
     * @param  int $id
     * @param  boolean $state
     * @return boolean true | false
     *
     */
    public function update_post($id,$state = false){
        try{
            if($state != false){
                $data = array(
                    'post' => $this->input->post('post'),
                    'category_id' => $this->input->post('category')
                );
                $this->db->where('id',$id);
                $this->db->update('posts',$data);
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            return false;
        }
    }
    /**
     * delete_post method
     * 
     * @param  int $id
     * @param  boolean $state
     * @param  boolean true | false
     *
     */
    public function delete_post($id,$state = false){
        try{
            if($state != false){
                $data = array(
                    'id' => $id  
                );
                $this->db->where('id');
                $this->db->delete('posts',$data);
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            return false;
        }
    }
    /**
     * control_post methodu
     *
     * @return boolean true | false
     *
     */
    public function control_post(){
        $data = array(
                'post' => $this->input->post('post'),
                'post_date' => date('Y:M:D')
            );
        $query = $this->db->get_where('post',$data);
        if($query->num_rows() > 0)
            return true;
        else
            return false;
    }
}
