<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:33:30
         compiled from "smarty_templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:471503479540733c1172783-82046168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f784ad669423c3e20e77e1d295a2a0dcfbf55a' => 
    array (
      0 => 'smarty_templates/page.tpl',
      1 => 1409758389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471503479540733c1172783-82046168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_540733c11dadb7_07812338',
  'variables' => 
  array (
    'InquiryInfo' => 0,
    'INQUIRY_APP_ROOT_DIRECTORY' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540733c11dadb7_07812338')) {function content_540733c11dadb7_07812338($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['InquiryInfo']->value['title'];?>
</title>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['INQUIRY_APP_ROOT_DIRECTORY']->value;?>
js/jquery111.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>


<!-- header -->

<div class="header">

	<div class="title"><?php echo $_smarty_tpl->tpl_vars['InquiryInfo']->value['title'];?>
</div>
	<div class="startdate"><span>start:</span> <?php echo $_smarty_tpl->tpl_vars['InquiryInfo']->value['startdate'];?>
</div>
	<div class="description"><?php echo $_smarty_tpl->tpl_vars['InquiryInfo']->value['description'];?>
</div>
	
</div>


<div class="mainContent">

    <?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>


</div>





</body>
</html>
<?php }} ?>
