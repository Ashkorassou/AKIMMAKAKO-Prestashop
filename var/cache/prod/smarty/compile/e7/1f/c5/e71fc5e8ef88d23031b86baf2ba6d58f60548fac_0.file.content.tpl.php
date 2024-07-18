<?php
/* Smarty version 4.3.4, created on 2024-07-11 10:30:48
  from 'C:\wamp64\www\prestashop2\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668fb458301539_68925299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71fc5e8ef88d23031b86baf2ba6d58f60548fac' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1720626928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fb458301539_68925299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
