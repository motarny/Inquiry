<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:41:00
         compiled from "smarty_templates/question_Number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12611965615407368c626c24-26313437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc27e057262dc12a1ec297fe43c593ad78fc125e' => 
    array (
      0 => 'smarty_templates/question_Number.tpl',
      1 => 1409754374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12611965615407368c626c24-26313437',
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
  'unifunc' => 'content_5407368c637c26_52346597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407368c637c26_52346597')) {function content_5407368c637c26_52346597($_smarty_tpl) {?><input type="text" class="number" id="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
" name="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['autofill']->value;?>
"/><?php }} ?>
