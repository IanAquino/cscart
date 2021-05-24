<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:03:00
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\discussion\hooks\companies\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85641182660901eb49c4783-57795549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dc28f39ce82d261ab75460d1ef9c1b4a1b8475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_extra.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '85641182660901eb49c4783-57795549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb49c6c95_11438719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb49c6c95_11438719')) {function content_60901eb49c6c95_11438719($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
