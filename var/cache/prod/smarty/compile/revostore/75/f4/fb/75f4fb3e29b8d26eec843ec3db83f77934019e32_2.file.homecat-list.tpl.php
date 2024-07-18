<?php
/* Smarty version 4.3.4, created on 2024-07-11 10:34:30
  from 'C:\wamp64\www\prestashop2\modules\ets_homecategories\views\templates\hook\homecat-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_668fb53602c6e0_18946331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f4fb3e29b8d26eec843ec3db83f77934019e32' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ets_homecategories\\views\\templates\\hook\\homecat-list.tpl',
      1 => 1720689804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-block-list.tpl' => 2,
  ),
),false)) {
function content_668fb53602c6e0_18946331 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE Home categories PRO -->
<div class="block products_block ets_home_categories clearfix homecat-tab-list <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_LOADING_ENABLED']->value) {?>loading-enabled<?php } else { ?>loading-disabled<?php }?>">	
	<?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_ALL_PRODUCT_TAB']->value || $_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value && $_smarty_tpl->tpl_vars['categories']->value) {?>
        <ul class="ets_homecat_category_list">
        <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_ALL_PRODUCT_TAB']->value) {?>
            <li class="is_parent_cat_li is_parent_cat_li_all" data-id-category="all">
                <span data-id-category="all" class="<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>homecat_ajax_tab_list homecat_ajax_tab_list_all<?php }?> is_parent_cat homecat_tab_name homcat_tab_all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','mod'=>'ets_homecategories'),$_smarty_tpl ) );?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySubCategories','id_category'=>2),$_smarty_tpl ) );?>

                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:./product-block-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_category'=>false), 0, false);
?>
            </li>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li class="is_parent_cat_li is_parent_cat_li_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] )), ENT_QUOTES, 'UTF-8');?>
" data-id-category="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] )), ENT_QUOTES, 'UTF-8');?>
"><a class="<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>homecat_ajax_tab_list homecat_ajax_tab_list_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] )), ENT_QUOTES, 'UTF-8');
}?> is_parent_cat homecat_tab_name homcat_tab_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-category="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['id_category'] )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html' )), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_SUB']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySubCategories','id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>

                <?php }?>                
                <?php $_smarty_tpl->_subTemplateRender("file:./product-block-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']), 0, true);
?>                
                <?php if ($_smarty_tpl->tpl_vars['ETS_HOMECAT_DISPLAY_CATEGORY_BANNER']->value == 'below') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryBanner','id_category'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>

                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var homecat_ajax_link = '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    var ETS_HOMECAT_ENBLE_CAROUSEL = <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_HOMECAT_ENBLE_CAROUSEL']->value )), ENT_QUOTES, 'UTF-8');?>
;
    var ets_homecat_order_seed = <?php if ((isset($_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value)) && (int)$_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value > 0 && (int)$_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value <= 10000) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_homecat_order_seed']->value )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
<?php echo '</script'; ?>
>
<!-- /MODULE Home categories PRO -->
<?php }
}
