<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:44:11
  from 'app:managementadditionalDistr' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2ebbeb7947_54388104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8301664a04f41a920fd15201c977c4f30aeafc09' => 
    array (
      0 => 'app:managementadditionalDistr',
      1 => 1630418526,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca2ebbeb7947_54388104 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tab id="access" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.distribution.access"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/distribution-settings",'section'=>"access",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

	<pkp-form
		v-bind="components.<?php echo (defined('FORM_ACCESS') ? constant('FORM_ACCESS') : null);?>
"
		@set="set"
	/>
</tab>
<tab id="archive" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.website.archiving"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/distribution-settings",'section'=>"archiving",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

	<tabs :is-side-tabs="true" :track-history="true">
		<tab id="pln" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.plnPluginArchiving"),$_smarty_tpl ) );?>
">
			<pkp-form
				v-bind="components.archivePn"
				@set="set"
			/>
		</tab>
		<tab id="lockss" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.otherLockss"),$_smarty_tpl ) );?>
">
			<pkp-form
				v-bind="components.<?php echo (defined('FORM_ARCHIVING_LOCKSS') ? constant('FORM_ARCHIVING_LOCKSS') : null);?>
"
				@set="set"
			/>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::distribution::archiving"),$_smarty_tpl ) );?>

	</tabs>
</tab>
<?php }
}
