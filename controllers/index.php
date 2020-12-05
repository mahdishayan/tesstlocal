<?php
Class Index extends controller {
    function __construct()
    {

    }
    function index(){
        //echo "method index in controllers";
        $this->view('index/index');
    }
    function user($age,$mobile,$city){
        echo '<br>';
        echo "age is = ".$age.'<br>';
        echo "mobile is = ".$mobile.'<br>';
        echo "city is = ".$city.'<br>';

    }

}
?>