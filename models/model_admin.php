<?php
Class Model_admin{
    function __construct()
    {
        echo 'ma inja hastim'.'<br>';
    }
    function infouser($mobile){
        $title = 'number is : '.$mobile;
        return $title;
    }
}
?>