<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:35:47
  from 'app:controllersgridcommoncell' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2cc39b28d6_26635076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3a138a7a78b2f9ceb169b3687bba1809d4cd552' => 
    array (
      0 => 'app:controllersgridcommoncell',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/buttonGenericLinkAction.tpl' => 1,
  ),
),false)) {
function content_65ca2cc39b28d6_26635076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('cellId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value ))));?>
<span id="<?php echo $_smarty_tpl->tpl_vars['cellId']->value;?>
">
	<?php if (count($_smarty_tpl->tpl_vars['actions']->value) > 0) {?>
		<?php $_smarty_tpl->_assignInScope('defaultCellAction', $_smarty_tpl->tpl_vars['actions']->value[0]);?>
		<?php $_smarty_tpl->_subTemplateRender("app:linkAction/buttonGenericLinkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['defaultCellAction']->value,'buttonSelector'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "#select-",$_smarty_tpl->tpl_vars['cellId']->value ))), 0, false);
?>
	<?php }?>
	<input type="checkbox" id="select-<?php echo $_smarty_tpl->tpl_vars['cellId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
"<?php }?> style="height: 15px; width: 15px;" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled="disabled"<?php }?>/>
</span>
<?php }
}
