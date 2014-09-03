<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:41:00
         compiled from "smarty_templates/question_Date_year.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14325217575407368c63af81-68119620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159f6abcaae286c5a61c31936c405f094365c7bb' => 
    array (
      0 => 'smarty_templates/question_Date_year.tpl',
      1 => 1409754372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14325217575407368c63af81-68119620',
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
  'unifunc' => 'content_5407368c667ea2_30996472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407368c667ea2_30996472')) {function content_5407368c667ea2_30996472($_smarty_tpl) {?><input type="text" class="dateYear" id="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
" name="question_<?php echo $_smarty_tpl->tpl_vars['questionId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['autofill']->value;?>
"/><?php }} ?>
