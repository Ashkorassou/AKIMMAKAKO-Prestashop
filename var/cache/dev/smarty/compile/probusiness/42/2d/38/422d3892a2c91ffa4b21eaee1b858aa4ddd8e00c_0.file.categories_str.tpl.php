<?php
/* Smarty version 4.3.4, created on 2024-07-18 08:30:40
  from 'C:\wamp64\www\prestashop2\modules\ybc_blog_free\views\templates\hook\categories_str.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698d2b0cd5b55_59428985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422d3892a2c91ffa4b21eaee1b858aa4ddd8e00c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ybc_blog_free\\views\\templates\\hook\\categories_str.tpl',
      1 => 1720713642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698d2b0cd5b55_59428985 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value && count($_smarty_tpl->tpl_vars['categories']->value) > 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8' ));?>
<br />
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ((isset($_smarty_tpl->tpl_vars['categories']->value[0]['title']))) {?>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value[0]['title'],'html','UTF-8' ));?>

<?php }
}
}
