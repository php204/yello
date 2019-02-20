<?php /* Smarty version Smarty-3.1.18, created on 2019-02-04 12:04:18
         compiled from ".\View\User\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:15507924915c580dce7b8903-98316658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6774719ad69158884dc2545a83ed4117785f8cd9' => 
    array (
      0 => '.\\View\\User\\edit.html',
      1 => 1549278100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15507924915c580dce7b8903-98316658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c580dce7dfa05_28488002',
  'variables' => 
  array (
    'title' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c580dce7dfa05_28488002')) {function content_5c580dce7dfa05_28488002($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
     
     <div class="container">
     	  <h1 class="text-center text-info"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

	     	  <form action="index.php?m=admin&c=user&a=update&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">
					  <div class="form-group">

					    <label for="user">user</label>
					    <input type="text" class="form-control" name="user" id="user"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user'];?>
">
					  </div>
					  <div class="form-group">
					    <label for="phone">phone</label>
					    <input type="text" class="form-control" name="phone" id="phone"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
">
					  </div>
					  <div class="form-group">
					    <label for="email">email</label>
					    <input type="text" class="form-control" name="email" id="email"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
					  </div>
			

					  <button type="submit" class="btn btn-default">提交</button>
			  </form>

     </div>
     
</body>
</html><?php }} ?>
