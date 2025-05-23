<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:47:34
  from 'plugins-1-plugins-generic-openAIRE-generic-openAIRE:controllersgridssettingss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2f8687e694_21628186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e1b883d64ac9925172987b9020628b120edeb7' => 
    array (
      0 => 'plugins-1-plugins-generic-openAIRE-generic-openAIRE:controllersgridssettingss',
      1 => 1635519984,
      2 => 'plugins-1-plugins-generic-openAIRE-generic-openAIRE',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca2f8687e694_21628186 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="clear:both;">
	<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"plugins.generic.openAIRE.resourceType.title",'for'=>"resourceType",'inline'=>true));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"plugins.generic.openAIRE.resourceType.title",'for'=>"resourceType",'inline'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"resourceType",'from'=>$_smarty_tpl->tpl_vars['resourceTypeOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['resourceType']->value,'label'=>"plugins.generic.openAIRE.resourceType.description",'translate'=>false),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('title'=>"plugins.generic.openAIRE.resourceType.title",'for'=>"resourceType",'inline'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }
}
