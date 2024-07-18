<?php
/* Smarty version 4.3.4, created on 2024-07-17 17:57:33
  from 'C:\wamp64\www\prestashop2\modules\ets_megamenu\views\templates\hook\admin-js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698060d4fbef4_11645627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53e628981c2049646ed03ddf790a46641795315' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ets_megamenu\\views\\templates\\hook\\admin-js.tpl',
      1 => 1720713640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698060d4fbef4_11645627 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['js_dir_path']->value,'quotes','UTF-8' ));?>
megamenu-admin.js"><?php echo '</script'; ?>
><?php }
}
