<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:37:26
  from 'app:controllersgridlanguagesl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2d262e4847_37336758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bc12a5a007cede76b0c1742f9748e99dd41f6c' => 
    array (
      0 => 'app:controllersgridlanguagesl',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca2d262e4847_37336758 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="gridCellContainer">
	<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

</span>
<?php if ($_smarty_tpl->tpl_vars['incomplete']->value) {?>
	<span class="pkp_form_error">*</span>
<?php }?>


<?php }
}
