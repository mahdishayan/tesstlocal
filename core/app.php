<?php
Class App{
    public $controller="index";
    public $method="index";
    public $params=array();
    function __construct()
    {
        if (isset($_GET['url']))
        {
            $url_base=$_GET['url'];
            $url_base=$this->parsUrl($url_base);
            $url=explode('/',$url_base);
            $this->controller=$url[0];
            unset($url[0]);
            if (isset($url[1]))
            {
                $this->method=$url[1];
                unset($url[1]);
            }else{
                echo "method not exist";
            }
            $this->params =array_values($url);
        }
        $controllerUrl="controllers/".$this->controller.".php";
        if (file_exists($controllerUrl))
        {
            require ($controllerUrl);
        }else{
            echo "file not exist";
        }
        $object=new $this->controller;
        if (method_exists($object,$this->method))
        {
            call_user_func_array([$object,$this->method],$this->params);
        }else{
            echo "method not exist";
        }
    }
    function parsUrl($url){
        filter_var($url,FILTER_SANITIZE_URL);
        $url=rtrim($url,'/');
        return $url;
    }
}

?>