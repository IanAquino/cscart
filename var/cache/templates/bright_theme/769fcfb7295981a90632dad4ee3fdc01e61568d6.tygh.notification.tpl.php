<?php /* Smarty version Smarty-3.1.21, created on 2021-06-03 17:35:37
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7211991760b8e8b91e7181-26890270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769fcfb7295981a90632dad4ee3fdc01e61568d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\notification.tpl',
      1 => 1620052039,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7211991760b8e8b91e7181-26890270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'message' => 0,
    'key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60b8e8b920d712_41802252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b8e8b920d712_41802252')) {function content_60b8e8b920d712_41802252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="cm-notification-container notification-container">
<?php if (!defined("AJAX_REQUEST")) {?>
<?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = fn_get_notifications(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["message"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['message']->value['type']=="I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']!="S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['type']=="N") {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']!="S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php }?>
<?php } ?>
<?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="cm-notification-container notification-container">
<?php if (!defined("AJAX_REQUEST")) {?>
<?php  $_smarty_tpl->tpl_vars["message"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["message"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = fn_get_notifications(''); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["message"]->key => $_smarty_tpl->tpl_vars["message"]->value) {
$_smarty_tpl->tpl_vars["message"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["message"]->key;
?>
<?php if ($_smarty_tpl->tpl_vars['message']->value['type']=="I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']!="S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['type']=="N") {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type']=="W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']=="S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state']!="S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php }?>
<?php } ?>
<?php }?>
</div><?php }?><?php }} ?>
