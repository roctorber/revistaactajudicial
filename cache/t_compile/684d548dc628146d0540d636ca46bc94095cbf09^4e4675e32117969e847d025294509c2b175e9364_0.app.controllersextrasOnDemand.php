<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:45:38
  from 'app:controllersextrasOnDemand' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2f12af3931_59217849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4675e32117969e847d025294509c2b175e9364' => 
    array (
      0 => 'app:controllersextrasOnDemand',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca2f12af3931_59217849 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').pkpHandler(
			'$.pkp.controllers.ExtrasOnDemandHandler');
	});
<?php echo '</script'; ?>
>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pkp_controllers_extrasOnDemand">
	<a href="#" class="toggleExtras">
		<span class="toggleExtras-inactive"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['moreDetailsText']->value),$_smarty_tpl ) );?>
</span>
		<span class="toggleExtras-active"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['lessDetailsText']->value),$_smarty_tpl ) );?>
</span>
		<span class="fa fa-plus"></span>
	</a>
	<div class="extrasContainer container">
		<?php echo $_smarty_tpl->tpl_vars['extraContent']->value;?>

	</div>
</div>
<?php }
}
