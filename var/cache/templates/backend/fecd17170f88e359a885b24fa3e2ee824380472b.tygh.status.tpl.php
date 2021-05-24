<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:26:25
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\pages\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194983732860901621870340-60291691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fecd17170f88e359a885b24fa3e2ee824380472b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\pages\\components\\bulk_edit\\status.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '194983732860901621870340-60291691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages_statuses' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901621873732_98933678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901621873732_98933678')) {function content_60901621873732_98933678($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <a class="cm-ajax cm-post cm-ajax-send-form" 
            href="<?php echo htmlspecialchars(fn_url("pages.m_update_statuses?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-id="pagination_contents"
            data-ca-target-form="#pages_tree_form"
        >
            <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

        </a>
    </li>
<?php } ?>
<?php }} ?>
