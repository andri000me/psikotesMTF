<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Cbt_user_grup_model extends CI_Model{
    public $table = 'cbt_user_grup';
    public $tableGroup = 'cbt_tes_group';
	
	function __construct(){
        parent::__construct();
    }
	
    function save($data){
        $this->db->insert($this->table, $data);
    }

    function saveGroup($data){
        $this->db->insert($this->tableGroup, $data);
    }
    
    function delete($kolom, $isi){
        $this->db->where($kolom, $isi)
                 ->delete($this->table);
    }
    
    function update($kolom, $isi, $data){
        $this->db->where($kolom, $isi)
                 ->update($this->table, $data);
    }
    
    function count_by_kolom($kolom, $isi){
        $this->db->select('COUNT(*) AS hasil')
                 ->where($kolom, $isi)
                 ->from($this->table);
        return $this->db->get();
    }
	
	function get_by_kolom($kolom, $isi){
        $this->db->where($kolom, $isi)
                 ->from($this->table);
        return $this->db->get();
    }
	
	function get_by_kolom_limit($kolom, $isi, $limit){
        $this->db->where($kolom, $isi)
                 ->from($this->table)
				 ->limit($limit);
        return $this->db->get();
    }

    function get_group(){
        $this->db->from($this->table)
                 ->order_by('grup_nama', 'ASC');
        return $this->db->get();
    }
	
	function get_datatable($start, $rows, $kolom, $isi){
		$this->db->where('('.$kolom.' LIKE "%'.$isi.'%")')
                 ->from($this->table)
				 ->order_by($kolom, 'ASC')
                 ->limit($rows, $start);
        return $this->db->get();
    }
    
    function get_datatable_count($kolom, $isi){
		$this->db->select('COUNT(*) AS hasil')
                 ->where('('.$kolom.' LIKE "%'.$isi.'%")')
                 ->from($this->table);
        return $this->db->get();
    }
    
        // function get_datatablegroup($start, $rows, $kolom, $isi){
        // 	$this->db->where('('.$kolom.' LIKE "%'.$isi.'%")')
        //              ->from($this->tableGroup)
        // 			 ->order_by($kolom, 'ASC')
        //              ->limit($rows, $start);
        //     return $this->db->get();
        // }

        // function get_datatablegroup_count($kolom, $isi){
        // 	$this->db->select('COUNT(*) AS hasil')
        //              ->where('('.$kolom.' LIKE "%'.$isi.'%")')
        //              ->from($this->tableGroup);
        //     return $this->db->get();
        // }

    function get_by_kolom_group($kolom, $isi){
        $this->db->where($kolom, $isi)
                 ->from($this->tableGroup);
        return $this->db->get();
    }
	
	function get_by_kolom_group_limit($kolom, $isi, $limit){
        $this->db->where($kolom, $isi)
                 ->from($this->tableGroup)
				 ->limit($limit);
        return $this->db->get();
    }
    
    function get_datatablegroup($start, $rows, $kolom, $isi){
		$this->db->where('('.$kolom.' LIKE "%'.$isi.'%" AND tes_group_end_time>=NOW())')
                 ->from($this->tableGroup)
				 ->order_by( '	tes_group_end_time','DSC', 'tes_group_user_id', 'ASC', 'tes_group_tes_id','ASC')
                 ->limit($rows, $start);
        return $this->db->get();
    }

    function get_datatablegroup_count($kolom, $isi){
		$this->db->select('COUNT(*) AS hasil')
                 ->where('('.$kolom.' LIKE "%'.$isi.'%" AND tes_group_end_time>=NOW())')
                 ->from($this->tableGroup);
        return $this->db->get();
    }
}