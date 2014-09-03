<?php /* Smarty version Smarty-3.1.16, created on 2014-09-03 17:41:00
         compiled from "smarty_templates/question_Manyofmany.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276061335407368c66cb12-00541906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b9ddf72e5a3a08306aeffd11cc0daafa475aa7' => 
    array (
      0 => 'smarty_templates/question_Manyofmany.tpl',
      1 => 1409754373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276061335407368c66cb12-00541906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'answers' => 0,
    'questionObject' => 0,
    'autofill' => 0,
    'extraSet' => 0,
    'extra' => 0,
    'extraField' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5407368c765664_03172579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5407368c765664_03172579')) {function content_5407368c765664_03172579($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['name'] = "loopAnswers";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['answers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopAnswers"]['total']);
?>
    <label>
        <div class="answer_option">
            <input
                    type="checkbox"
                    value="tak"
                    name="question_<?php echo $_smarty_tpl->tpl_vars['questionObject']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['field'];?>
"
                    <?php if (($_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['value']==$_smarty_tpl->tpl_vars['autofill']->value)&&($_smarty_tpl->tpl_vars['autofill']->value!='')) {?>checked="true" <?php }?>
                    />
            <?php echo $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['description'];?>

            <?php if ($_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['extras']!=null) {?>
                <div class="extras">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['name'] = "loopSets";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['extras']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopSets"]['total']);
?>
                        <?php $_smarty_tpl->tpl_vars["extraSetIndex"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['loopSets']['index']+1, null, 0);?>
                        <div class="extrasSet">
                            <?php $_smarty_tpl->tpl_vars["extraSet"] = new Smarty_variable($_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['extras'][$_smarty_tpl->getVariable('smarty')->value['section']['loopSets']['index']], null, 0);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['name'] = "loopExtras";
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['extraSet']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["loopExtras"]['total']);
?>
                                <?php $_smarty_tpl->tpl_vars["extra"] = new Smarty_variable($_smarty_tpl->tpl_vars['extraSet']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopExtras']['index']], null, 0);?>
                                <div class="queryExtra <?php echo $_smarty_tpl->tpl_vars['extra']->value['type'];?>
">
                                    <?php $_smarty_tpl->tpl_vars["extraField"] = new Smarty_variable($_smarty_tpl->tpl_vars['extra']->value['field'], null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['extra']->value['field']=='') {?><?php $_smarty_tpl->tpl_vars["extraField"] = new Smarty_variable($_smarty_tpl->tpl_vars['extra']->value['query'], null, 0);?><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['extra']->value['type']=='text') {?>
                                        <label><?php echo $_smarty_tpl->tpl_vars['extra']->value['query'];?>
</label>
                                        <input type="text" name="question_<?php echo $_smarty_tpl->tpl_vars['questionObject']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['extraField']->value;?>
">
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['extra']->value['type']=='textarea') {?>
                                        <label><?php echo $_smarty_tpl->tpl_vars['extra']->value['query'];?>
</label>
                                        <textarea name="question_<?php echo $_smarty_tpl->tpl_vars['questionObject']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['extraField']->value;?>
"></textarea>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['extra']->value['type']=='checkbox') {?>
                                        <label><input type="checkbox" name="question_<?php echo $_smarty_tpl->tpl_vars['questionObject']->value->getId();?>
_<?php echo $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['loopAnswers']['index']]['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['extraField']->value;?>
" value="tak"> <?php echo $_smarty_tpl->tpl_vars['extra']->value['query'];?>
</label>
                                    <?php }?>
                                </div>
                            <?php endfor; endif; ?>

                        </div>
                    <?php endfor; endif; ?>
                </div>
            <?php }?>
        </div>
    </label>
<?php endfor; endif; ?>








<script language="javascript">



</script>
<?php }} ?>
