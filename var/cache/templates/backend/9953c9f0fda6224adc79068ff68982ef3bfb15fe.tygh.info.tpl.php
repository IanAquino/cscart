<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 17:27:26
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\call_requests\settings\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18555956216090084ee7cd34-80572800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9953c9f0fda6224adc79068ff68982ef3bfb15fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\call_requests\\settings\\info.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18555956216090084ee7cd34-80572800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6090084eea6968_56481693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6090084eea6968_56481693')) {function content_6090084eea6968_56481693($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }} ?>
