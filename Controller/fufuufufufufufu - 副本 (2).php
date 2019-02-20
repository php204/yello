<?php
use Admin\CommonsController;
	class UserController extends CommonsController
	{
		
		public function index4(){
             
             $data=$this->redis->lrange('user_list',0,-1);
                  $temp=[];
             foreach ($data as $key => $value) {
                  $temp[]=$this->redis->hmget($value,['id','user','phone','email']);
             }

           
			 $this->smarty->assign('title','用户列表');
			 $this->smarty->assign('data',$temp);
			 $this->smarty->display('User/list.html');

		}

		public function add(){
	 
			
			 $this->smarty->assign('title','用户添加');
			 $this->smarty->display('User/add.html');
          
			
		}

		public function edit(){
			   $id = $_GET['id'];
			   $key='user_'.$id;
			   $data=$this->redis->hmget($key,['id','user','phone','email']);


               $this->smarty->assign('title','用户修改');
               $this->smarty->assign('data',$data);
			   $this->smarty->display('User/edit.html');
		}
        
        public function update(){
        	 $id=$_GET['id'];
        	 $data=$_POST;
        	 $key='user_'.$id;
        	 $res1=$this->redis->hmset($key,$data);
        	if ($res1) {
		          	  echo '<script>alert("修改成功");location.href="index.php?m=admin&c=user&a=index"</script>';
		          }else{
		          	  echo '<script>alert("修改失败");index.php?m=admin&c=user&a=edit$id='.$id.'</script>';
		          }
        }
		public function delete(){

               $id = $_GET['id'];

               $key='user_'.$id;

               $res1=$this->redis->del($key);//删除嘻哈
               $res2=$this->redis->lrem('user_list',$key,1); //删除列表

                  if ($res1 && $res2) {
		          	  echo '<script>alert("删除成功");location.href="index.php?m=admin&c=user&a=index"</script>';
		          }else{
		          	  echo '<script>alert("删除失败");index.php?m=admin&c=user&a=add</script>';
		          }
                
		}
		public function insert(){
          //获取随机id
          $id=$this->redis->incr('id');
          //所有数据+id 
          $key='user_'.$id;
          $_POST['id']=$id;
          $data=$_POST;
          //压入哈希
          $res1=$this->redis->hmset($key,$data);
          //压入列表
          $res2=$this->redis->rpush('user_list',$key);
           
          
          if ($res1 && $res2) {
          	  echo '<script>alert("添加成功");location.href="index.php?m=admin&c=user&a=index"</script>';
          }else{
          	  echo '<script>alert("添加失败");index.php?m=admin&c=user&a=add</script>';
          }



		}	
			

	
	}


  ?>