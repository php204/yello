<?php /* Smarty version Smarty-3.1.18, created on 2019-01-31 12:46:58
         compiled from ".\View\User\add.html" */ ?>
<?php /*%%SmartyHeaderCode:13999697975c52d1dc93e691-88638039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd74ad736be4d2fa87100d773dabf951e74262bb3' => 
    array (
      0 => '.\\View\\User\\add.html',
      1 => 1548935209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13999697975c52d1dc93e691-88638039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c52d1dcad8914_36864738',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c52d1dcad8914_36864738')) {function content_5c52d1dcad8914_36864738($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
     
     <div class="container">
     	  <h1 class="text-center text-info"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

	     	  <form action="index.php?c=user&a=insert" method="post">
					  <div class="form-group">
					    <label for="user">user</label>
					    <input type="text" class="form-control" name="user" id="user" placeholder="user">
					  </div>
					  <div class="form-group">
					    <label for="phone">phone</label>
					    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
					  </div>
					  <div class="form-group">
					    <label for="email">email</label>
					    <input type="text" class="form-control" name="email" id="email" placeholder="email">
					  </div>
			

					  <button type="submit" class="btn btn-default">提交</button>
			  </form>

     </div>
     
</body>
</html><?php }} ?>
