<?php
/* Smarty version 4.3.4, created on 2024-07-17 17:51:53
  from 'C:\wamp64\www\prestashop2\themes\probusiness\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669804b9306e44_24294331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135bb726412e3ad3a35bf5a37a5ec9f4c282875d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\themes\\probusiness\\templates\\_partials\\stylesheets.tpl',
      1 => 1720713648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669804b9306e44_24294331 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['uri'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['media'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT1_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT2_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'] != '') {?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_FONT3_DATA'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" media="all" />
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stylesheet']->value['content'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
