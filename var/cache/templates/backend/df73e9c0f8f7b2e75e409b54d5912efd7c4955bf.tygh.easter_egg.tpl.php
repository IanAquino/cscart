<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:02:56
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\components\easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39987457960901eb0587056-15585276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df73e9c0f8f7b2e75e409b54d5912efd7c4955bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\easter_egg.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39987457960901eb0587056-15585276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb0589816_17400659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb0589816_17400659')) {function content_60901eb0589816_17400659($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
