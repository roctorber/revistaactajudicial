<?php
/* Smarty version 3.1.39, created on 2024-02-13 13:56:49
  from 'app:submissionformcomplete.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65cb7521cb5b40_17297512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d2d69b745fab1c845f68f5e94a1469385e9625' => 
    array (
      0 => 'app:submissionformcomplete.tp',
      1 => 1630418602,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb7521cb5b40_17297512 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.submissionComplete"),$_smarty_tpl ) );?>
</h2>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.submissionCompleteThanks",'contextName'=>$_smarty_tpl->tpl_vars['context']->value->getLocalizedName()),$_smarty_tpl ) );?>
</p>
<div class="separator"></div>
<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext"),$_smarty_tpl ) );?>
</h3>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.description"),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.forNow"),$_smarty_tpl ) );?>
</p>

<ul class="plain">
	<li><a href=<?php echo $_smarty_tpl->tpl_vars['reviewSubmissionUrl']->value;?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.review"),$_smarty_tpl ) );?>
</a></li>
	<li><a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.create"),$_smarty_tpl ) );?>
</a></li>
	<li><a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions",'anchor'=>"submissions"),$_smarty_tpl ) );?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.return"),$_smarty_tpl ) );?>
</a></li>
</ul>
<?php }
}
