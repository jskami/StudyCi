<?php
class Pages extends CI_Controller {
    public function view(){
        echo '매뉴얼이 없으니까 잘 안되네..';
    }
    
    public function my1() {
        $this->load->view('mypractice1');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }

    public function my2() {
        $this->load->view('mypractice2');
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
    }
}