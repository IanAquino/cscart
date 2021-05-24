<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:03:00
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\seo\hooks\companies\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42571544060901eb493cfd4-11497064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6d5b9995076ee951cea7290a0c8f7d50be4c9f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\companies\\detailed_content.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '42571544060901eb493cfd4-11497064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb493fc06_81709909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb493fc06_81709909')) {function content_60901eb493fc06_81709909($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0);?>

<?php }?><?php }} ?>
