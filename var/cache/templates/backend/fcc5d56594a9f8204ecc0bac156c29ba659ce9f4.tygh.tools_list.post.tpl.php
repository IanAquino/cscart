<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:03:00
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\vendor_communication\hooks\companies\tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196661566360901eb4a587a4-68529290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcc5d56594a9f8204ecc0bac156c29ba659ce9f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\companies\\tools_list.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '196661566360901eb4a587a4-68529290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'id' => 0,
    'divider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb4a5c962_19902852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb4a5c962_19902852')) {function content_60901eb4a5c962_19902852($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::ADMIN")) {?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['divider'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true,'divider'=>$_smarty_tpl->tpl_vars['divider']->value), 0);?>
<?php }} ?>
