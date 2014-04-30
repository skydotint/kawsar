<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DbQuery extends CI_Model {

    private $where = array();
    
    
    public $_bill_itemTable = 'bill_item';
    public $_chatTable = 'chat';
    public $_chat_dataTable = 'chat_data';
    public $_ci_sessionsTable = 'ci_sessions';
    public $_contactsTable = 'contacts';
    public $_coupon_codeTable = 'coupon_code';
    public $_front_homeTable = 'front_home';
    public $_front_menuTable = 'front_menu';
    public $_front_pagesTable = 'front_pages';
    public $_front_portfolioTable = 'front_portfolio';
    public $_front_sliderTable = 'front_slider';
    public $_front_slider_slideTable = 'front_slider_slide';
    public $_front_testimonialsTable = 'front_testimonials';
    public $_front_textblockTable = 'front_textblock';
    public $_groupsTable = 'groups';
    public $_imagesTable = 'images';
    public $_image_commentsTable = 'image_comments';
    public $_invoicesTable = 'invoices';
    public $_jobsTable = 'jobs';
    public $_job_assignedTable = 'job_assigned';
    public $_job_instructionsTable = 'job_instructions';
    public $_login_attemptsTable = 'login_attempts';
    public $_paymentsTable = 'payments';
    public $_quotationsTable = 'quotations';
    public $_servicesTable = 'services';
    public $_usersTable = 'users';
    public $_users_groupsTable = 'users_groups';
    
    

    /**
     * @Author: Samrat Khan <facebook.com/saamraatkhaan>
     */
    public function __Construct() {
        parent::__construct();
    }

    /**
     * @Author: Samrat Khan <facebook.com/saamraatkhaan>
     */
    public function getRecords($table) {
        $result = $this->db->get($table);
        return $result;
    }

    /**
     * @Author: Samrat Khan <facebook.com/saamraatkhaan>
     */
    public function getRecordsWhere($table, $where, $option) {

        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);

        if ($sql->num_rows() > 0) {

            if ($option == "all") {

                foreach ($sql->result() as $rows) {

                    $data[] = $rows;
                }
            } else {

                $data = $sql->row_array();
            }

            return $data;
        } else
            return false;
    }

    public function insertRecords($table, $records) {

        $sql = $this->db->insert($table, $records);
        return ($sql) ? true : false;
    }
    
    public function updateRecords($table, $where = '') {

        $sql = $this->db->update($table, $where);
        return ($sql) ? true : false;
    }

    public function deleteRecords($table, $where = '') {

        if (empty($where))
            $del = $this->db->empty_table($table);
        else
            $del = $this->db->delete($table, $where);

        return ($del) ? 1 : 0;
    }

}
