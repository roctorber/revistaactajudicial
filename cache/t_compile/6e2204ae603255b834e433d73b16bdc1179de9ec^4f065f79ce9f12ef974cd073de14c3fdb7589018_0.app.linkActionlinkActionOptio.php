<?php
/* Smarty version 3.1.39, created on 2024-11-27 16:52:09
  from 'app:linkActionlinkActionOptio' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67474e3912e7c2_02918123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f065f79ce9f12ef974cd073de14c3fdb7589018' => 
    array (
      0 => 'app:linkActionlinkActionOptio',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67474e3912e7c2_02918123 (Smarty_Internal_Template $_smarty_tpl) {
?>
{
	<?php if ($_smarty_tpl->tpl_vars['selfActivate']->value) {?>
		selfActivate: <?php echo $_smarty_tpl->tpl_vars['selfActivate']->value;?>
,
	<?php }?>
	staticId: <?php echo json_encode($_smarty_tpl->tpl_vars['staticId']->value);?>
,
	<?php $_smarty_tpl->_assignInScope('actionRequest', $_smarty_tpl->tpl_vars['action']->value->getActionRequest());?>
	actionRequest: <?php echo json_encode($_smarty_tpl->tpl_vars['actionRequest']->value->getJSLinkActionRequest());?>
,
	actionRequestOptions: {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionRequest']->value->getLocalizedOptions(), 'optionValue', false, 'optionName', 'actionRequestOptions', array (
));
$_smarty_tpl->tpl_vars['optionValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optionName']->value => $_smarty_tpl->tpl_vars['optionValue']->value) {
$_smarty_tpl->tpl_vars['optionValue']->do_else = false;
?>
			<?php echo json_encode($_smarty_tpl->tpl_vars['optionName']->value);?>
: <?php echo json_encode($_smarty_tpl->tpl_vars['optionValue']->value);?>
,
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
}
<?php }
}
