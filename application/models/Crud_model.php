<?php
class Crud_model  extends CI_Model	
{
	function __construct()
	{
		parent::__construct();
	}
	public function getAll($tabla='',$index ='*'){
		$this->db->select($index);
		$this->db->from($tabla);
		return $this->db->get()->result();
	}
	public function getAllJoin($tabla='',$index ='*',$joinTable='',$joincondition='',$escape=null){
		$this->db->select($index);
		$this->db->from($tabla);
		$this->db->join($joinTable,$joincondition,$escape);
		return $this->db->get()->result();
	}
	public function getWhere($tabla='',$index='*',$where=array(''),$ordering=null){
		$this->db->select($index);
		$this->db->from($tabla);
		$this->db->where($where);
		$this->db->order_by($ordering);
		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->row();
		}
		if ($query->num_rows()>1) {
			return $query->result();
		}
		
		//Cuando sea solo uno el resultado manejar el objeto como $resultado[0]->indice;
	}
	public function getWhereJoin($tabla='',$index='*',$where=array(''),$joinTable='',$joincondition='',$escape=null){
		$this->db->select($index);
		$this->db->from($tabla);
		$this->db->where($where);
		$this->db->join($joinTable,$joincondition,$escape);
		return $this->db->get()->result();
		//Cuando sea solo uno el resultado manejar el objeto como $resultado[0]->indice;
	}
	public function getMultipleJoin($tabla='',$index='*',$where=array(),$multipleJoin=array(),$ordering='DESC',$group=null){
		$this->db->select($index);
		$this->db->from($tabla);
		$this->db->where($where);
		foreach ($multipleJoin as $join) {
			$this->db->join($join['tabla'],$join['joincondition'],$join['escape']);
		}
		if ($group!=null) {
		$this->db->group_by($group);
		}
		return $this->db->get()->result();

	}
	public function insert($tabla='',$datos=''){
		$this->db->insert($tabla,$datos);
		return $this->db->insert_id();
	}
	public function update($tabla='',$where=array(),$datos = array()){
		$this->db->where($where);
		$this->db->update($tabla,$datos);
		return true;
	}
	public function delete($tabla='',$where=array()){
		$this->db->where($where);
		$this->db->delete($tabla);
		return true;
	}
}