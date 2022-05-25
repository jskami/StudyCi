<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 블로그 기본 Model
 * http://sample.cikorea.net/mvc_sample/basic_sample
 * Created on 22.05.18
 * @author 대상추(jskami_@naver.com)
 * @version 3.1
 */
class Blog_basic_model extends CI_Model {
    protected $tbl;
     
    public function __construct() {
        parent::__construct();
         
        // $this->load->database(); // Database Load
        $this->tbl = 'blog_basic';
        $this->pkey = 'blog_basic_id';   
    }
    
	public function blog_basic() {
		$len = 10;
		
		return $this->db->order_by('created', 'desc')->limit($len)->get($this->tbl)->result_array();
	}
	
    public function insert($data) {
    	$this->db->set('created', 'now()', FALSE);
        $this->db->insert($this->tbl, $data);
		
		return $this->db->insert_id();
	}
}