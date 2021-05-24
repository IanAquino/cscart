<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:44:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179719795660901a48515aa3-41010992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069eb9cff90c7df359c89197c871594223a220ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179719795660901a48515aa3-41010992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901a48518fe6_10720201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901a48518fe6_10720201')) {function content_60901a48518fe6_10720201($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
