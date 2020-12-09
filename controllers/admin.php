<?php
Class Admin extends controller {
    function __construct()
    {

    }
    function index(){
        //echo "method index in controllers";
        $this->view('admin/index');
    }
    function user($age,$mobile,$city){
        echo '<br>';
        echo "age is = ".$age.'<br>';
        echo "mobile is = ".$mobile.'<br>';
        echo "city is = ".$city.'<br>';

    }

}
?>