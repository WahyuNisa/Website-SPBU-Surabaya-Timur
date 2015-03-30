<?php
class Mspbu extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    function login($username, $password,$table){
        $data = $this->db
                ->where(array('username' => $username, 'password' => $password))
                ->get($table);
 
        //dicek
        if ($data->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }

    function getOne1($key, $keyvalue, $key2, $keyvalue2, $table) {
        $this->db->where($key, $keyvalue);
        $this->db->where($key2, $keyvalue2);
        $this->db->limit(1);
        $Q = $this->db->get($table);
        if ($Q->num_rows() > 0) {
            $row = $Q->row_array();
            return $row;
        } else {
            $this->session->set_flashdata('error', 'Sorry, try again!');
            return array();
        }
    }

    function get($table){
        $sql = $this->db->get($table);
        return $sql->result();
    }

    function getSlide($table){
        $this->db->limit(3);
        $sql = $this->db->get($table);
        return $sql->result();
    }

    function getDetail($table,$param,$id){
        $this->db->where($param, $id);
        $sql = $this->db->get($table);
        return $sql->result();
    }

    function save ($table, $data){
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1'){
                return TRUE;
        }
        return FALSE;
    }

    function getJoin($table,$join,$joinwhere,$param,$id,$field='*'){
        $this->db->from($table);
        $this->db->select($field);
        $this->db->join($join, $joinwhere);
        $this->db->like($param,$id);
        $sql = $this->db->get();
        return $sql->result();
    }
}