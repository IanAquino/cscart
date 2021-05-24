<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 17:27:27
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\seo\hooks\settings_fields\setting_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1589270386090084f1cbbc9-46849012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f76a67e6aba478bc74d2ad5b78ce002cb6cf0ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\hooks\\settings_fields\\setting_description.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1589270386090084f1cbbc9-46849012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'show_language_warning' => 0,
    'is_default_storefront_affected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6090084f1d2537_81227699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6090084f1d2537_81227699')) {function content_6090084f1d2537_81227699($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warning','seo.default_storefront_frontend_default_language_warning','seo.storefront_frontend_default_language_warning'));
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['name']==="frontend_default_language"&&$_smarty_tpl->tpl_vars['show_language_warning']->value) {?>
    <div class="text-warning">
        <strong><?php echo $_smarty_tpl->__("warning");?>
!</strong>
        <?php if ($_smarty_tpl->tpl_vars['is_default_storefront_affected']->value) {?>
            <?php echo $_smarty_tpl->__("seo.default_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("seo.storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
