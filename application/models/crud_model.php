<?php

class Crud_model extends CI_Model
{
	function Crud_model()
	{
		parent::__construct();
   	}

	function get_data($table, $select='*', $order_by='') {
		$this->db->select($select);
		if ($order_by!='') 
			$this->db->order_by($order_by);
		$query = $this->db->get($table);
		return $query->result_array();
	}

	function get_data_where($table, $where=array(), $order_by='', $limit='') {
		$this->db->where($where);
		if ($order_by!='') 
			$this->db->order_by($order_by);

		if ($limit!='') 
			$this->db->limit($limit);
		
		$query = $this->db->get($table);
		if ($query->num_rows==1) {
			return $query->row();
		}
		if ($query->num_rows<1) {
			return false;
		}
		return $query->result_array();
	}

	function get_where($table, $where=array(), $order_by='', $limit='') {
		$this->db->where($where);
		if ($order_by!='') 
			$this->db->order_by($order_by);

		if ($limit!='') 
			$this->db->limit($limit);
		
		$query = $this->db->get($table);
		return $query->result_array();
	}

	public function get_oders_with_invoice($id='', $limit='', $order_by='')
	{
		// if ($id!='') 
		// 	$this->db->where('id', $id);
		// $this->db->join('invoices', 'invoices.job_id = jobs.id', 'left');
		// $this->db->join('job_assigned', 'job_assigned.job_id = jobs.id', 'left');
		// $this->db->join('quotations', 'quotations.job_id = jobs.id', 'left');
		// $this->db->join('payments', 'payments.invoice_id = invoices.id', 'left');
		// if ($order_by!='') 
		// 	$this->db->order_by($order_by);

		// if ($limit!='') 
		// 	$this->db->limit($limit);

		$where =  "";
		if ($id!='') {
			$where =  "WHERE `jobs`.`user_id`=$id";
		}

		$query = $this->db->query('SELECT `jobs`.*, `jobs`.`id` as job_tbl_id, `invoices`.*, `invoices`.`id` as invoice_tbl_id, `job_assigned`.*, `quotations`.*, `payments`.* FROM (`jobs`) LEFT JOIN `invoices` ON `invoices`.`job_id` = `jobs`.`id` LEFT JOIN `job_assigned` ON `job_assigned`.`job_id` = `jobs`.`id` LEFT JOIN `quotations` ON `quotations`.`job_id` = `jobs`.`id` LEFT JOIN `payments` ON `payments`.`invoice_id` = `invoices`.`id` ' . $where);
		
		// $query = $this->db->get('jobs');
		return $query->result_array();
	}

	function get_user_data($id, $select='*') {
		$this->db->select($select);
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->result_array();
	}

	function id_to_name($id, $table, $select='name') {
		$this->db->select($select);
		$this->db->where('id', $id);
		$query = $this->db->get($table);

		return $query->result_array();
	}

	function get_single_job($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('jobs');
		return $query->result_array();
	}

    /**
     * Insert your from data to $table
     * @param string $table
     * @param mixed $data
     * @return boolean
     */
	function insert($table, $data){
		$insert = $this->db->insert($table, $data);
		if($insert){
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	/**
     * Update data by following where condition
     * @param string $table
     * @param mixed $data
     * @param mixed $where
     * @return boolean 
     */
	function update($table,$data, $where){
		$query = $this->db->update($table, $data, $where);
		if($query) return TRUE;
		else return FALSE;
	}
	
    /**
     * SELECT data with custom condition from $table
     * @param string $table
     * @param mixed $data
     * @return boolean
     */
    function select_where($table, $where, $select='*'){
            $this->db->select($select);
            $this->db->where($where);
            $query = $this->db->get($table);
            return $query->result_array();
    }

	function is_exist($table, $key, $value="") {
        $this->db->select($key);

        if ($value!="") {
        	$this->db->where(array($key => $value));
        }
        
        $query = $this->db->get($table);

        if (count($query->row_array())>0) {
        	return true;
        }
        return false;
	}

	/**
	 * Detele data of a or more tables
	 * 
	 * @param $table string|array
	 * @param $where array
	 */
	public function delete_data($table, $where)
	{
		return $this->db->delete($table, $where);
	}

	public function count_data($table, $where='', $like=false)
	{
		if ($where!='' && $like==true) {
			$this->db->like($where); // $array = array('title' => $match, 'page1' => $match, 'page2' => $match);
		} elseif ($where!='') {
			$this->db->where($where);
		}
		
		$this->db->from($table);
		return $this->db->count_all_results();
	}
}