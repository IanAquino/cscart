<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:02:56
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\products\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140114587560901eb00ce374-55386641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3a9da343c67148202a849be273b9e7cdd8c773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\products\\components\\bulk_edit\\actions.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140114587560901eb00ce374-55386641',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb00d4190_96938934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb00d4190_96938934')) {function content_60901eb00d4190_96938934($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected','export_selected'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
