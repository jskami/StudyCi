<?php
/* 22.05.18 study start */

class Hello2 extends CI_Controller {
    public function index($name = 'Controller') {
        echo 'Hello' . $name . '!!';
    }
}