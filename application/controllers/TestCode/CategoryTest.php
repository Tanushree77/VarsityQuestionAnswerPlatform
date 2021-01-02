<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/Category.php");


class CategoryTest extends Category
{

	function __construct() {
        parent::__construct();
    }

    function test_get($cat,$exp)
    {

        $var = $this->_get(urldecode($cat));
        $data="false";
        if($var){
            $data="true";
        }
        
        if($data==$exp) echo "Test success";
        else echo "Test failed";
    }

    function test_question_tag()
    {
        $var = $this->_question_tag();
        
        if(count($var) > 0){
            
            echo "Test success";
        }
        
       // if($data==$e) echo "Test success";
        else 
        echo "Test failed";
        
    }
}
