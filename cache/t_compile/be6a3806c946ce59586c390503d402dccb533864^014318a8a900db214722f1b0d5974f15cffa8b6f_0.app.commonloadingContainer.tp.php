<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:48:42
  from 'app:commonloadingContainer.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2fca6f4389_41194681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014318a8a900db214722f1b0d5974f15cffa8b6f' => 
    array (
      0 => 'app:commonloadingContainer.tp',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca2fca6f4389_41194681 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pkp_loading">
	<span class="pkp_spinner"></span>
	<span class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.loading"),$_smarty_tpl ) );?>
</span>
</div>
<?php }
}
