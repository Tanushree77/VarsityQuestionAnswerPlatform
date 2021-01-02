<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/User.php");


class UserTest extends User
{

	function __construct() {
        parent::__construct();
    }

    function testUser_get($user,$exp)
    {

        $var = $this->_get($user);
        $data="false";
        if($var){
            $data="true";
        }
        
        if($data==$exp) echo "Test success";
        else echo "Test failed";
    }

}
