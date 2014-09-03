<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:41:00
         compiled from "smarty_templates/question_Textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17755716375407368c781d21-35776322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb46898c10d4ea63b19fbdc63d8cfd1087b0116' => 
    array (
      0 => 'smarty_templates/question_Textarea.tpl',
      1 => 1409754376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17755716375407368c781d21-35776322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'questionId' => 0,
    'autofill' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5407368c793678_79001111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407368c793678_79001111')) {function content_5407368c793678_79001111($_smarty_tpl) {?><textarea id="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
" name="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['autofill']->value;?>
</textarea><?php }} ?>
