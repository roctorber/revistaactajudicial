<?php
/* Smarty version 3.1.39, created on 2024-02-14 11:20:15
  from 'app:controllersinformationCen' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65cca1ef24f348_72885297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddee6ace424f828055c47a64e58f0b2e1f2d7b84' => 
    array (
      0 => 'app:controllersinformationCen',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cca1ef24f348_72885297 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"editorial-workflow",'section'=>"editorial-history",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionHistoryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('params'=>$_smarty_tpl->tpl_vars['gridParameters']->value,'router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.eventLog.SubmissionEventLogGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionHistoryGridContainer",'url'=>$_smarty_tpl->tpl_vars['submissionHistoryGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
