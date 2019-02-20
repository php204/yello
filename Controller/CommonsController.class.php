<?php
namespace Admin;
use Smarty;
use Redis;
	class CommonsController
	{
		   public $smarty;
		   public $redis;
		 public function __construct(){

                 include './Public/Smarty-3.1.18/libs/Smarty.class.php';
                $this->smarty = new Smarty;
				$this->smarty->template_dir = SMARTY_TEMP;
				$this->smarty->compile_dir = SMARTY_COM;

			    
			    $this->redis = new redis;
            	$this->redis -> connect('localhost',6379);
                $this->redis -> select(0);
		 }
		
	}


  ?>