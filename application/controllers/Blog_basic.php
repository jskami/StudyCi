<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 22.05.18 아주 간단한 블로그 형태 만들기
http://sample.cikorea.net/mvc_sample/basic_sample
*/

class Blog_basic extends CI_Controller {
    public function __construct() { // __construct() : class 키워드로 클래스를 선언할 경우 인스턴스를 생성하게 된다.
        parent::__construct();
    
            $this->load->helper('url');
        $this->load->model('mvc_sample/blog_basic_model');
    }

    public function index() {
        $data = array(
            'blogs' => $this->blog_basic_model->blog_basic()
        );

        $this->load->view('mvc_sample/blog_basic', $data);
    }

    public function post() {
        $data = array(
            'title' => strip_tags($this->input->post('title', true)),
            'content' => strip_tags($this->input->post('content', true))
        );
        
        if($data['title'] != '' && $data['content'] != '') {
            //$this->blog_basic_model->insert($data);
        }

        redirect(site_url('mvc_sample/blog_basic'));
    }


}