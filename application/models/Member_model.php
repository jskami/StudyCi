<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {
    public function __contruct() {
        parent::__construct();
    }

    private $member = array(
        '1' => '친구A',
        '2' => '친구B',
        '3' => '친구C',
        '4' => '친구D',
        '5' => '친구E'
    );

    public function GetMember() {
        return $this->member;
    }

}

// 클래스명은 파일명과 같아야 한다.
// 클래스는 CI_Model을 상속 받아야 한다.