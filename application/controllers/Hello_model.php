<?php
    class Hello_model extends CI_Controller {
        public function index() {
            $this->load->model('mvc_sample/hello_m');

            echo 'Hello' . $this->hello_m->get_name() . '!';
        }
    }