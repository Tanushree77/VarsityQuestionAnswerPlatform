<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/Question.php");


class QuestionTest extends Question
{

	function __construct() {
        parent::__construct();
    }

    function testQues_get($ques,$exp)
    {

        $var = $this->_get(urldecode($ques));
        $data="false";
        if($var){
            $data="true";
        }
        
        if($data==$exp) echo "Test success";
        else echo "Test failed";
    }

}
