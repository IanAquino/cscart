<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:15
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\orders\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2135919462609015db788033-57414946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b693e25ceb29b9c8b6ced179bf3bcb3e1b67c99a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\orders\\components\\bulk_edit\\actions.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2135919462609015db788033-57414946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015db790b07_13525279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015db790b07_13525279')) {function content_609015db790b07_13525279($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_purchased_products','export_selected'));
?>
<li>
    <?php ob_start();?><?php echo $_smarty_tpl->__("view_purchased_products");?>
<?php $_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp5,'dispatch'=>"dispatch[orders.products_range]",'form'=>"orders_list_form"));?>

</li>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:view_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:view_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:view_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<li class="divider"></li>

<li class="mobile-hide">
    <?php ob_start();?><?php echo $_smarty_tpl->__("export_selected");?>
<?php $_tmp6=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp6,'dispatch'=>"dispatch[orders.export_range]",'form'=>"orders_list_form"));?>

</li>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:export_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:export_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:export_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<li class="divider"></li>

<li class="mobile-hide">
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[orders.m_delete]",'form'=>"orders_list_form"));?>


</li>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:list_tools_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:list_tools_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:list_tools_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
