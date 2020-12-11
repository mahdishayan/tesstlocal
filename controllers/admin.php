<?php
Class Admin extends controller {
    function __construct()
    {

    }
    function index(){
        //echo "method index in controllers";
        $this->view('admin/index');
    }
    function user($mobile){
        $info= $this->model->infouser($mobile);
        $data=array('info'=>$info);
        $this->view('admin/index',$data);
    }

}
?>