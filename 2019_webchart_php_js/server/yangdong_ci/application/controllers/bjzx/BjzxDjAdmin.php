<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( !class_exists( 'Controller' ) ){
    class Controller extends CI_Controller{   
    }
}

/**
* @author 徐晓
* @date 2016-3-25
* encode UTF-8
*/

class BjzxDjAdmin extends CI_Controller{
	function __construct(){
		parent::__construct();

        $this->load->library('yd/Yd_lib');

        $this->load->library('bjzx/BjzxDj_lib');

        $this->load->model('bjzx/BjzxDj_Model');
	}

	public function index(){
	}

    public function api_daily_learn($type) {
        if ($type == 'newest') {
            $urls = $this->get_daily_learn_newest();
        }elseif($this->bjzxdj_lib->in_daily_types($type)) {
            $urls = $this->get_daily_learn_type($type);
        }else {

        }

        echo json_encode($urls);
    }

    private function get_daily_learn_newest() {
        return $this->BjzxDj_Model->yd_bjzxdj->query_more_order('d_date', TRUE);
    }

    private function get_daily_learn_type($type) {
        $where = array('d_type' => $type);
        $where_string = $this->yd_lib->gen_dict_compare($where);
        return $this->BjzxDj_Model->yd_bjzxdj->query_more_order('d_date', TRUE, $where_string);
    }

    public function api_dailyadmin_view_urls() {
        $where_string = '1';

        $urls = $this->BjzxDj_Model->yd_bjzxdj->query_more_order('d_date', TRUE, $where_string); 

        echo json_encode($urls);
    }

    public function api_dailyadmin_add_url() {

        $values = $this->input->post();
        $this->BjzxDj_Model->yd_bjzxdj->insert_one($values);

        $message['statusCode'] = '200';
        $message['message'] = '插入URL成功';
        echo json_encode($message);
    }

    public function api_dailyadmin_del_url($d_id) {
        $where_url = array('d_id' => cf_yd_get_post($d_id));
        
        if ($this->BjzxDj_Model->yd_bjzxdj->delete_one($where_url) ) {
            $message['statusCode'] = '200';
            $message['message'] = '删除URL成功';
        } else {
            $message['statusCode'] = '300';
            $message['message'] = '删除URL失败';
        }

        echo $message['message'];
    }

    public function api_dailyadmin_modify_url($d_id) {
        $where_url = array('d_id' => cf_yd_get_post($d_id));

        $set = $this->input->post();
        
        if ($this->BjzxDj_Model->yd_bjzxdj->modify_more($set, $where_url) ) {
            $message['statusCode'] = '200';
            $message['message'] = '修改URL成功';
        } else {
            $message['statusCode'] = '300';
            $message['message'] = '修改URL失败';
        }

        echo json_encode($message);
    }

    private function get_url($d_id) {
        $d_id = cf_yd_get_post($d_id);
        
        $where = array('d_id' => $d_id);
        $url = $this->BjzxDj_Model->yd_bjzxdj->query_one($where);

        return $url;
    }

    public function api_dailyadmin_get_url($d_id) {
        $url = $this->get_url($d_id);

        echo json_encode($url);
    }
}

?>