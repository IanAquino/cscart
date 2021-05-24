<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:15
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\orders\components\bulk_edit\print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905186250609015db705643-42711143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8f33e168330bb4ee247007bf8592fe8df220b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\orders\\components\\bulk_edit\\print.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '905186250609015db705643-42711143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015db70b1f5_47835467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015db70b1f5_47835467')) {function content_609015db70b1f5_47835467($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('invoice','invoice_pdf','packing_slip'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice"),'dispatch'=>"dispatch[orders.bulk_print]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice_pdf"),'dispatch'=>"dispatch[orders.bulk_print..pdf]",'form'=>"orders_list_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("packing_slip"),'dispatch'=>"dispatch[orders.packing_slip]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>
<?php }} ?>
