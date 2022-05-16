<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index() {
        echo "Hello World";
        echo " 안녕!";
    }

    public function one() {
        $data = array(
            'title' => 'Hello::one',
            'content' => 'Hello One'
        );  // 1.뷰에 데이터를 전달하기 위한 코드, $data에 데이터들을 배열로 만들어서 입력해준 뒤

        // $this->load->view('one', $data); 
        // 2.위에서 설정한 값을 담은 $data를 뷰에 로드시켜준다. (3.은 one.php에 설명함)
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/content', $data);
        $this->load->view('templates/footer', $data);
        // 항상 공통으로 적용되는 소스들을 상단,내용,하단으로 나누어 include 하기로 했다. 때문에 위에 2번은 중복됨으로 없어도 된다.
    }

    public function two() {
        $data = array(
            'title' => 'Hello::two',
            'content' => 'Hello Two'
        );

        // $this->load->view('two', $data);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/content', $data);
        $this->load->view('templates/footer', $data);
    }

    // 모델을 로딩하자!
    public function member() {
        $this->load->model('Member_model'); // 모델을 로드한다.
        $data['member'] = $this->Member_model->GetMember(); // 모델에 GetMember 메서드를 사용한다.
        $this->load->view('Member/member', $data);  // 모델에서 가져온 값을 뷰에 전달한다.
    }
    // 이제 뷰를 생성하러 가보자.

    public function member_db1() {
        $this->load->model('Member_model');
        $data['member'] = $this->Member_model->GetMemberByDB1();
        $this->load->view('Member/member', $data);
    }

    public function member_db2() {
        $this->load->model('Member_model');
        $data['member'] = $this->Member_model->GetMemberByDB2();
        $this->load->view('Member/member', $data);
    }


}
// URL은 "서버주소/폴더명/해당php파일명/클래스명/클래스의 함수명"
// ex) 127.0.0.1(서버주소에 폴더명과 함께 등록했음)/index.php/Hello/index
