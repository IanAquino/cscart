<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:03:00
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\storefronts\components\access_key.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53727476260901eb4820676-97570886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49139432cedc7b037cc90d324464c48ba9fbcaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\access_key.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53727476260901eb4820676-97570886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'access_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb4823d18_73668972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb4823d18_73668972')) {function content_60901eb4823d18_73668972($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_access_key'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[access_key]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_access_key");?>

    </label>
    <div class="controls">
        <input type="text"
               id="access_key_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="input-large"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['access_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>
<?php }} ?>
