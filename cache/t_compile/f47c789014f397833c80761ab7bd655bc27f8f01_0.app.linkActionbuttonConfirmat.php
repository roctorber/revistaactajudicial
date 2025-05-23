<?php
/* Smarty version 3.1.39, created on 2024-02-13 13:56:42
  from 'app:linkActionbuttonConfirmat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65cb751ae6a669_29895855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f47c789014f397833c80761ab7bd655bc27f8f01' => 
    array (
      0 => 'app:linkActionbuttonConfirmat',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb751ae6a669_29895855 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['titleIcon']->value) {
$_smarty_tpl->_assignInScope('titleIcon', "modal_confirm");
}
echo '<script'; ?>
>
	$(function() {
		$('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonSelector']->value,'javascript' ));?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
			{
				actionRequest: '$.pkp.classes.linkAction.ModalRequest',
				actionRequestOptions: {
					modalHandler: '$.pkp.controllers.modal.ButtonConfirmationModalHandler',
					title: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"form.confirmSubmit.title"),$_smarty_tpl ) ));?>
,
					okButton: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.ok"),$_smarty_tpl ) ));?>
,
					cancelButton: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.cancel"),$_smarty_tpl ) ));?>
,
					dialogText: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['dialogText']->value),$_smarty_tpl ) ));?>
,
					$button: $(<?php echo json_encode($_smarty_tpl->tpl_vars['buttonSelector']->value);?>
),
					titleIcon: <?php echo json_encode($_smarty_tpl->tpl_vars['titleIcon']->value);?>
,
					width: 'auto'
				},
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
