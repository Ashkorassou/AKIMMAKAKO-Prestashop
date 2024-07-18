<?php
/* Smarty version 4.3.4, created on 2024-07-11 10:34:29
  from 'C:\wamp64\www\prestashop2\modules\ets_reviewticker\views\templates\hook\reviewticker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668fb5359f46a0_12308897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cfebc820a7f89d7cb27cc033a497ac25ce5aa68' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ets_reviewticker\\views\\templates\\hook\\reviewticker.tpl',
      1 => 1720689805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fb5359f46a0_12308897 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['assigns']->value)) && $_smarty_tpl->tpl_vars['assigns']->value) {
echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigns']->value, 'val', false, 'id_key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
        var <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_key']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = <?php if ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_POSITION' || $_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_URL_AJAX') {?>'<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php } elseif ($_smarty_tpl->tpl_vars['id_key']->value == 'ETS_RT_LOOP_OUT') {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'floatval' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value )), ENT_QUOTES, 'UTF-8');
}?>;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
