<?php /* Smarty version Smarty-3.1.18, created on 2019-02-04 10:23:36
         compiled from ".\View\User\list.html" */ ?>
<?php /*%%SmartyHeaderCode:21406905745c57f677e29002-36943767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8ea32a426666bb2165ac8486ff7c697dc4faed' => 
    array (
      0 => '.\\View\\User\\list.html',
      1 => 1549271903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21406905745c57f677e29002-36943767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c57f678080e81_35591058',
  'variables' => 
  array (
    'title' => 0,
    'data' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c57f678080e81_35591058')) {function content_5c57f678080e81_35591058($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
     
     <div class="container">
     	  <h1 class="text-center text-info"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

	     	 <table class="table table-bordered table-hover">
			    <tr>
                   <th>ID</th>
                   <th>用户</th>
                   <th>电话</th>
                   <th>邮件</th>
                   <th>操作</th>
			    </tr>
			    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				    <tr>
	                   <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
	                   <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user'];?>
</td>
	                   <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
	                   <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
	                   <td>
                           <a href="index.php?m=admin&c=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a>
                           <a href="index.php?m=admin&c=user&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
	                   </td>
				    </tr>
			    <?php } ?>
			</table>
     </div>
     
</body>
</html><?php }} ?>
