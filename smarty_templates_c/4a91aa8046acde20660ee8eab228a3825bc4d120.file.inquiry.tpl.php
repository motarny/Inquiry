<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:41:45
         compiled from "smarty_templates/inquiry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17052018855407330ecdda69-83878895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a91aa8046acde20660ee8eab228a3825bc4d120' => 
    array (
      0 => 'smarty_templates/inquiry.tpl',
      1 => 1409758904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17052018855407330ecdda69-83878895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5407330eda83c5_26196066',
  'variables' => 
  array (
    'Questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407330eda83c5_26196066')) {function content_5407330eda83c5_26196066($_smarty_tpl) {?>

<div class="questions">

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['name'] = "loopQuestions";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Questions']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopQuestions"]['total']);
?>
        <div class="questionContainer">
            <div class="query">
                <div class="index"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loopQuestions']['index']+1;?>
.</div>
                <div class="querytxt"><?php echo $_smarty_tpl->tpl_vars['Questions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopQuestions']['index']]->getQuery();?>
</div>
            	<div class="clear"></div>
            </div>
            <div class="answer">
                <?php echo $_smarty_tpl->tpl_vars['Questions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopQuestions']['index']]->getHtmlAnswers();?>

            </div>
            <div class="clear"></div>
        </div>
    <?php endfor; endif; ?>
</div>

<div class="summary">


</div>




    <script lang="javascript">

        $(function() {
        	
        	$("div.answer_option input[type='text'], textarea").click(function(e) {
        		$(this).find('input').focus();
        		e.stopPropagation();
        		// alert('ok');
        		return false;
        		
        	});
        	
            $("div.answer_option input[type='checkbox']").change(function(e) {
                var isChecked = $(this).prop('checked');
                if (isChecked)
                {
                    $(this).parent().find('div.extras').show();
                } else {
                    $(this).parent().find('div.extras').hide();
                }
            });

            $("div.answer_option input[type='radio']").change(function() {
                // wylacz wszystkie extrasy
                var answerContainer = $(this).closest('div.answer');
                answerContainer.find('div.extras').hide();
                var isChecked = $(this).prop('checked');
                if (isChecked)
                {
                    $(this).parent().find('div.extras').show();
                }
            });

        });


    </script>
<?php }} ?>
