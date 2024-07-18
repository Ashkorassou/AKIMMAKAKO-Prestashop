<?php
/* Smarty version 4.3.4, created on 2024-07-17 17:55:26
  from 'C:\wamp64\www\prestashop2\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698058e40f883_99454903',
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
function content_6698058e40f883_99454903 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
