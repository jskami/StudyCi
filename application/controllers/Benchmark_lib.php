<?php
/* Benchmark Class Study
 * Created on 22.05.18
 * @author 대상추 (jskami_@naver.com)
 * @version 3.1.14
 */
class Benchmark_lib extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->benchmark->mark('code_start');
        $sum = 0;
        for($i=1; $i <= 1000; $i++) $sum += $i;
        $this->benchmark->mark('code_end');

        $data['code'] = $this->benchmark->elapsed_time('code_start', 'code_end');
        
        $this->benchmark->mark('dog');
        $sum = 0;
        for($i=1; $i <= 1000; $i++) $sum += $i;

        $this->benchmark->mark('cat');
        $sum = 0;
        for($i=1; $i <= 1000; $i++) $sum += $i;

        $this->benchmark->mark('bird');
        $sum = 0;
        for($i=1; $i <= 1000; $i++) $sum += $i;

        $data['dog_cat'] = $this->benchmark->elapsed_time('dog', 'cat');
        $data['cat_bird'] = $this->benchmark->elapsed_time('cat', 'bird');
        $data['dog_bird'] = $this->benchmark->elapsed_time('dog', 'bird');

        $this->load->view('benchmark_lib_sample', $data);


    }

}