<?php
/* Smarty version 4.3.4, created on 2024-07-11 10:34:29
  from 'C:\wamp64\www\prestashop2\modules\ybc_specificprices\views\templates\hook\renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668fb535ae1b80_08705719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7822e58934deac67c59acdebb7d665d0cbab147d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ybc_specificprices\\views\\templates\\hook\\renderJs.tpl',
      1 => 1720689807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fb535ae1b80_08705719 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var day = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'day','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var hr = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hour','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var min = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var sec = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var days = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var hrs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hrs','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var mins = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'mins','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
    var secs = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'secs','mod'=>'ybc_specificprices'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
><?php }
}
