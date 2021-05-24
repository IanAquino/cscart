<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 19:02:56
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\products\product_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134762956360901eb02643b9-12457460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b0357574769ef026600f724a00a48e20394e6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\product_additional_info.pre.tpl',
      1 => 1616559120,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134762956360901eb02643b9-12457460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901eb0266bb2_01440995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901eb0266bb2_01440995')) {function content_60901eb0266bb2_01440995($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php }} ?>
