<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:15
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\orders\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95090699609015db6eff61-40625729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665129bbc3203840d9c1880b30e603d8eb0c96ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\orders\\components\\bulk_edit\\status.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95090699609015db6eff61-40625729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_status_descr' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015db6f50b7_36718194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015db6f50b7_36718194')) {function content_609015db6f50b7_36718194($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_status_descr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <a class="cm-ajax cm-post cm-ajax-send-form" 
            href="<?php echo htmlspecialchars(fn_url("orders.m_update?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-id="pagination_contents"
            data-ca-target-form="#orders_list_form"
        >
            <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

        </a>
    </li>
<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify_customer_status'=>true,'notify_department_status'=>true,'notify_vendor_status'=>true,'name_prefix'=>"notify"), 0);?>

<?php }} ?>
