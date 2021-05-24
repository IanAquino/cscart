<?php /* Smarty version Smarty-3.1.21, created on 2021-05-03 18:43:03
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\advanced_addon\hooks\index\index.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168382218460901a0715a976-99396294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49be48486a984fedda09cc9adb11489d14e943f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\advanced_addon\\hooks\\index\\index.post.tpl',
      1 => 1620056346,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '168382218460901a0715a976-99396294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewed_categories' => 0,
    'category_data' => 0,
    'category_id' => 0,
    'category_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60901a0718cdb1_62983762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60901a0718cdb1_62983762')) {function content_60901a0718cdb1_62983762($_smarty_tpl) {?><div class="statistics-box">
	<div class="statistics-body">
		<p class="strong">Viewed categories</p>
		<div class="clear">
			<?php if ($_smarty_tpl->tpl_vars['viewed_categories']->value) {?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars["category_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viewed_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_data"]->key => $_smarty_tpl->tpl_vars["category_data"]->value) {
$_smarty_tpl->tpl_vars["category_data"]->_loop = true;
?>
						<li><strong><a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['category_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['user_name'], ENT_QUOTES, 'UTF-8');?>
</a></strong>:&nbsp;
							<?php  $_smarty_tpl->tpl_vars["category_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["category_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["category_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category_data']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["category_name"]->key => $_smarty_tpl->tpl_vars["category_name"]->value) {
$_smarty_tpl->tpl_vars["category_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["category_id"]->value = $_smarty_tpl->tpl_vars["category_name"]->key;
?>
								<a href="<?php echo htmlspecialchars(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['category_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'UTF-8');?>
</a>, 
							<?php } ?>
						</li>
					<?php } ?>
				</ul>
			<?php } else { ?>
				<ul>
					<li>No data found</li>
				</ul>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
