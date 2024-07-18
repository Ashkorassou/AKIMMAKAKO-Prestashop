<?php
/* Smarty version 4.3.4, created on 2024-07-18 08:23:26
  from 'C:\wamp64\www\prestashop2\modules\ybc_blog_free\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6698d0feedbce1_80317192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a644b01c9a64080e4c8df4c1844f473830e42a30' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\ybc_blog_free\\views\\templates\\hook\\iframe.tpl',
      1 => 1720713642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6698d0feedbce1_80317192 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
   function phProductFeedResizeIframe(obj) {
       $('iframe').css('height','auto');
       setTimeout(function() {
           $('iframe').css('opacity',1);
           var pHeight = $(obj).parent().height();
           $(obj).css('height','540px');
       }, 300);
    }
<?php echo '</script'; ?>
> 
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
