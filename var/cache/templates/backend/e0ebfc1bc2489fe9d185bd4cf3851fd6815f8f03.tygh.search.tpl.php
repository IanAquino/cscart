<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:10
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\buttons\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521013246609015d6759da3-25413598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0ebfc1bc2489fe9d185bd4cf3851fd6815f8f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\search.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '521013246609015d6759da3-25413598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015d675c943_11293268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015d675c943_11293268')) {function content_609015d675c943_11293268($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
