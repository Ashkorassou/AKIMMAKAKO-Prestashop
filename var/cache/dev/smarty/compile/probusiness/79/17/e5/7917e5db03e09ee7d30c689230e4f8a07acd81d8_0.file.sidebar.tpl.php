<?php
/* Smarty version 4.3.4, created on 2024-07-18 08:23:26
  from 'C:\wamp64\www\prestashop2\modules\ybc_blog_free\views\templates\hook\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698d0fe35ea68_29959172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7917e5db03e09ee7d30c689230e4f8a07acd81d8' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ybc_blog_free\\views\\templates\\hook\\sidebar.tpl',
      1 => 1720713642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698d0fe35ea68_29959172 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ybc-left-panel col-lg-2">
    <div class="list-group">
        <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                <a class="<?php if ($_smarty_tpl->tpl_vars['active']->value == $_smarty_tpl->tpl_vars['tab']->value['id']) {?>active<?php }?> list-group-item" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['url'],'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id'],'html','UTF-8' ));?>
"><?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['icon']))) {?><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['icon'],'html','UTF-8' ));?>
"></i> <?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['label'],'html','UTF-8' ));?>
</a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
</div><?php }
}
