<!-- Creating a Model 
https://extbrain.tistory.com/81?category=275792 -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// 모델에 비정상적인 접근을 방지해주는 CI의 기본 코드이다.

class Member_model extends CI_Model {
    public function __contruct() {
        parent::__construct();
        $this->db1 = $this->load->database('db1', true);
        $this->db2 = $this->load->database('db2', true);    // 다중 db 연결

    }   // Member_model 클래스의 생성자이다.

    private $member = array(
        '1' => '친구A',
        '2' => '친구B',
        '3' => '친구C',
        '4' => '친구D',
        '5' => '친구E'
    );  // 데이터를 DB에서 가져오는 것을 대체하기 위한 배열 값이다.

    public function GetMember() {
        $this->load->database();
        $result = $this->db1->query('SELECT `id`, `name` FROM member')->result();    // DB에 쿼리를 보내고 그 결과를 객체로 반환해주는 코드.
        $this->db->close(); // 작업이 끝나면 수동으로 해당 코드의 연결을 끊어주도록 한다.

        return $result;
        // return $this->member;
    }   // member 배열에 존재하는 값을 반환해주는 메서드이다.

    public function GetMemberByDB1() {
        $result = $this->db1->query('SELECT `id`, `name` FROM member')->result();
        $this->db1->close();
        return $result;
    }

    public function GetMemberByDB2() {
        $result = $this->db2->query('SELECT `id`, `name` FROM member')->result();
        $this->db2->close();
        return $result;
    }

}

// 클래스명은 파일명과 같아야 한다.
// 클래스는 CI_Model을 상속 받아야 한다.
// 모델을 만든 후 컨트롤러에 가서 모델을 로딩하도록 한다.