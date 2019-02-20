<?php
      
    $m=isset($_GET['m'])?$_GET['m']:'admin';
    $c=isset($_GET['c'])?$_GET['c']:'user';
    $a=isset($_GET['a'])?$_GET['a']:'index';
    
    include_once './Controller/CommonsController.class.php';
    include_once './Config/config.php';
    $con_dir='./Controller/'.ucfirst($c).'Controller.class.php';
    if (!file_exists($con_dir)) {
    	  exit('控制器不存在');
    }
    include_once($con_dir);
    $con_name=ucfirst($c).'Controller';
    $obj = new $con_name;
    if (!method_exists($obj,$a)) {
           exit('方法不存在');
    }
    $obj->$a();
  ?>