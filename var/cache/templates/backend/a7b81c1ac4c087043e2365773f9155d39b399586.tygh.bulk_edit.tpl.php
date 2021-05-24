<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:25:15
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\orders\components\bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448394151609015db6a94d4-86466706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b81c1ac4c087043e2365773f9155d39b399586' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\orders\\components\\bulk_edit.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1448394151609015db6a94d4-86466706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'can_change_status' => 0,
    'order_status_descr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_609015db6b2e35_27335657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609015db6b2e35_27335657')) {function content_609015db6b2e35_27335657($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','status','print_documents','actions'));
?>
<?php $_smarty_tpl->tpl_vars['can_change_status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['can_change_status']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>

<div class="bulk-edit clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
     data-ca-bulkedit-component="expandedObject"
>
    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
                <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                    type="checkbox" 
                    checked 
                    data-ca-bulkedit-toggler="true"
                    data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                    data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
                />
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                    <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
                </span>
                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('check_statuses'=>$_smarty_tpl->tpl_vars['order_status_descr']->value,'dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true), 0);?>

            </li>

            <?php if ($_smarty_tpl->tpl_vars['can_change_status']->value) {?>
            <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>
            <?php }?>

            <li class="btn bulk-edit__btn bulk-edit__btn--print dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("print_documents");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/bulk_edit/print.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>

            <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/orders/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
