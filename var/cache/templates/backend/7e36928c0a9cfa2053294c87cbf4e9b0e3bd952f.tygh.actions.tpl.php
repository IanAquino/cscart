<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:10
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\profiles\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166794731609015d6332ff3-67106164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e36928c0a9cfa2053294c87cbf4e9b0e3bd952f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\profiles\\components\\bulk_edit\\actions.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166794731609015d6332ff3-67106164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015d6340000_72393326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015d6340000_72393326')) {function content_609015d6340000_72393326($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_orders','export_selected'));
?>
<?php if (fn_check_view_permissions("orders.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_orders"),'dispatch'=>"dispatch[orders.manage]",'form'=>"userlist_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"user_ids")));?>

    </li>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:view_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:view_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:view_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (fn_allowed_for("ULTIMATE")||!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
     <?php if (fn_check_view_permissions("profiles.export_range","POST")) {?>
        <li class="divider"></li>

        <li>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[profiles.export_range]",'form'=>"userlist_form"));?>

        </li>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:export_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:export_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:export_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (fn_check_permissions("profiles","m_delete","admin","POST",array("user_type"=>$_REQUEST['user_type']))) {?>
    <li class="divider"></li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profiles.m_delete]",'form'=>"userlist_form"));?>

    </li>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:list_tools_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:list_tools_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:list_tools_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
