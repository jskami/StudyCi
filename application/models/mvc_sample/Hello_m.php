<?php
// 파일명과 클래스명이 반드시 일치해야 웹에 나타나는듯하다.
class hello_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function get_name() {
        return 'Model, 이것은 모델에서 불러온 텍스트입니다';
    }
}