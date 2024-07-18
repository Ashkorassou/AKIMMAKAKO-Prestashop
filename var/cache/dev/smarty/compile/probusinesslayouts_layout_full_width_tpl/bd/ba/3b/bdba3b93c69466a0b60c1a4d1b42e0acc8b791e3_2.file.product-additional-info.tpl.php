<?php
/* Smarty version 4.3.4, created on 2024-07-18 09:15:30
  from 'C:\wamp64\www\prestashop2\themes\probusiness\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698dd329363f2_38495380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdba3b93c69466a0b60c1a4d1b42e0acc8b791e3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\themes\\probusiness\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1720713647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698dd329363f2_38495380 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
