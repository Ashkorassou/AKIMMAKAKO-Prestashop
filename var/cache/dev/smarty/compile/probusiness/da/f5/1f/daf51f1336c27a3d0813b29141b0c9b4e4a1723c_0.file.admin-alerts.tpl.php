<?php
/* Smarty version 4.3.4, created on 2024-07-17 17:58:25
  from 'C:\wamp64\www\prestashop2\modules\ets_megamenu\views\templates\hook\admin-alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66980641dfe1e5_61464960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf51f1336c27a3d0813b29141b0c9b4e4a1723c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ets_megamenu\\views\\templates\\hook\\admin-alerts.tpl',
      1 => 1720713640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66980641dfe1e5_61464960 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['errors'])) && $_smarty_tpl->tpl_vars['alerts']->value['errors']) {?>
    <div class="alert alert-danger mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['errors']);?>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['alerts']->value['success'])) && $_smarty_tpl->tpl_vars['alerts']->value['success']) {?>
    <div class="alert alert-success mm-alert mm-alert-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' ));?>
"><?php echo implode('<br/>',$_smarty_tpl->tpl_vars['alerts']->value['success']);?>
</div>
<?php }
}
}
