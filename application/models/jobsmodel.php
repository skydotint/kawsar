<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobsModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('dbquery');
    }

    public function getAlljobs() {
        $query = $this->dbquery->getRecords($this->dbquery->_jobsTable);
        return $query->result();
    }

    public function getClientsubmittedjobs($id) {
        $sql = "SELECT id, name, service_type, created, completed, no_of_image, user_id, (
                SELECT username FROM users WHERE users.id = jobs.user_id) AS name,
                modified, todo, jobs.status FROM jobs WHERE user_id = (
                SELECT user_id FROM users_groups WHERE user_id = jobs.user_id AND group_id ={$id})";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getClientsubmittedjobswithDateBetween($id) {
        $sql = "SELECT id, name, service_type, created, completed, no_of_image, user_id, (
					SELECT username FROM users WHERE users.id = jobs.user_id) AS name,
					modified, todo, jobs.status FROM jobs WHERE user_id = (
					SELECT user_id FROM users_groups WHERE user_id = jobs.user_id AND group_id ={$id} ) AND (created BETWEEN 1391716323 AND 1397273425)";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getJobsbystatus($id, $status) {
        $sql = "SELECT id, name, service_type, created, completed, no_of_image, user_id, (
				SELECT username FROM users WHERE users.id = jobs.user_id) AS name,
				modified, todo, jobs.status FROM jobs WHERE user_id = (
				SELECT user_id FROM users_groups WHERE user_id = jobs.user_id AND group_id ={$id} ) AND status = {$status}";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getJobsbystatusDateBetween($id, $status) {
        $sql = "SELECT id, name, service_type, created, completed, no_of_image, user_id, (
                SELECT username FROM users WHERE users.id = jobs.user_id) AS name,
                modified, todo, jobs.status FROM jobs WHERE user_id = (
                SELECT user_id FROM users_groups WHERE user_id = jobs.user_id AND group_id ={$id} ) AND status = {$status} AND (created BETWEEN 1391716323 AND 1397273425) LIMIT 0 , 30";

        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

}
