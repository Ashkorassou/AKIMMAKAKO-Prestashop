<?php
/* Smarty version 4.3.4, created on 2024-07-17 18:03:34
  from 'C:\wamp64\www\prestashop2\themes\probusiness\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669807768f0826_85103712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9288c507efeb9ded4b6612c7a2463ea9f486ee' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\themes\\probusiness\\templates\\catalog\\listing\\category.tpl',
      1 => 1720713647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669807768f0826_85103712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1610510585669807768c66f2_74799344', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_1610510585669807768c66f2_74799344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_1610510585669807768c66f2_74799344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="block-category card card-block">
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1) {?>
            <h4 class="h1 title_category"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1) {?>
            <div class="category-cover">
                <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['image']['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LISTING_IMAGE_BLOCK'] == 1) {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
            <?php }?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
