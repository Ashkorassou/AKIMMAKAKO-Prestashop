<?php
/* Smarty version 4.3.4, created on 2024-07-18 08:28:55
  from 'C:\wamp64\www\prestashop2\modules\ybc_blog_free\views\templates\hook\success_message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698d2473eee64_54570990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2894b35106bf04ed589e15ab6152bdf7dd530344' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ybc_blog_free\\views\\templates\\hook\\success_message.tpl',
      1 => 1720713642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698d2473eee64_54570990 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msg']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msg']->value,'html','UTF-8' ));
}
if ($_smarty_tpl->tpl_vars['title']->value && $_smarty_tpl->tpl_vars['link']->value) {?> | <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value,'html','UTF-8' ));?>
" target="_blank"><b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
</b></a><?php }
}
}
