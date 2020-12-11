<?php
Class controller{
    function __construct()
    {
    }
    function view($viewUrl,$data=array(),$headeradmin='',$footeradmin=''){
        if ($headeradmin==''){
            require ('headeradmin.php');
        }
        require ('views/'.$viewUrl.'.php');
        if ($footeradmin==''){
            require ('footeradmin.php');
        }
    }
    function model($modelUrl){
        require ('models/model_'.$modelUrl.'.php');
        $nameclassmodel='Model_'.$modelUrl;
        $this->model=new $nameclassmodel;
    }

}
?>