<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:03:00
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\discussion\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105099549160901eb4974c65-53251098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808bc6ebc3bb6db85a58b5c02460a51e229de8ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105099549160901eb4974c65-53251098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb4977277_06805660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb4977277_06805660')) {function content_60901eb4977277_06805660($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
