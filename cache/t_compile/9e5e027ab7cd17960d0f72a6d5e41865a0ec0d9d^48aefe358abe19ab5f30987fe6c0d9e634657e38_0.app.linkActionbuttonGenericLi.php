<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:35:47
  from 'app:linkActionbuttonGenericLi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2cc39b8549_59791953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48aefe358abe19ab5f30987fe6c0d9e634657e38' => 
    array (
      0 => 'app:linkActionbuttonGenericLi',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkActionOptions.tpl' => 1,
  ),
),false)) {
function content_65ca2cc39b8549_59791953 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonSelector']->value,'jsid' ));?>
').pkpHandler(
				'$.pkp.controllers.linkAction.LinkActionHandler',
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkActionOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value), 0, false);
?>);
	});
<?php echo '</script'; ?>
>
<?php }
}
