<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:26:25
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\tags\hooks\pages\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45762219560901621a40365-54918772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ed460235367422218716cf89fe03b39571277a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\tags\\hooks\\pages\\search_form.post.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45762219560901621a40365-54918772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901621a41dc5_00041151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901621a41dc5_00041151')) {function content_60901621a41dc5_00041151($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div><?php }} ?>
