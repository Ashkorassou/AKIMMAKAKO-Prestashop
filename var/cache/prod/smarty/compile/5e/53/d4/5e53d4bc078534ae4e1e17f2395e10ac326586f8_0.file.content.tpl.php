<?php
/* Smarty version 4.3.4, created on 2024-07-11 11:06:43
  from 'C:\wamp64\www\prestashop2\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668fbcc37879a3_65160113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e53d4bc078534ae4e1e17f2395e10ac326586f8' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin\\themes\\default\\template\\content.tpl',
      1 => 1720626932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fbcc37879a3_65160113 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
