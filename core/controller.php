<?php
Class controller{
    function __construct()
    {
    }
    function view($viewUrl){
        require ('views/'.$viewUrl.'.php');
    }
}
?>