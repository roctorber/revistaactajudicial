<?php
/* Smarty version 3.1.39, created on 2024-02-12 16:58:27
  from 'app:gatewayclockss.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca4e334f04f6_54364837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f502a2c7d1f356344791dabdfe6456df70ac8784' => 
    array (
      0 => 'app:gatewayclockss.tpl',
      1 => 1630418526,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65ca4e334f04f6_54364837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/coseju/public_html/revistaactajudicial/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
$_smarty_tpl->_assignInScope('pageTitleTranslated', "CLOCKSS Publisher Manifest");
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="page clockss">
<?php if ($_smarty_tpl->tpl_vars['journals']->value) {?>
<h3>Archive of Published Issues</h3>

<ul>
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'journals','item'=>'journal'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'journals','item'=>'journal'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['journal']->value->getData('enableClockss')) {?><li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath(),'page'=>"gateway",'op'=>"clockss"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
</a></li><?php }
$_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'journals','item'=>'journal'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</ul>
<?php } else { ?>

<p><?php if ($_smarty_tpl->tpl_vars['prevYear']->value !== null) {?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"clockss",'year'=>$_smarty_tpl->tpl_vars['prevYear']->value),$_smarty_tpl ) );?>
" class="action">&lt;&lt; Previous</a><?php } else { ?><span class="disabled heading">&lt;&lt; Previous</span><?php }?> | <?php if ($_smarty_tpl->tpl_vars['nextYear']->value !== null) {?><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"clockss",'year'=>$_smarty_tpl->tpl_vars['nextYear']->value),$_smarty_tpl ) );?>
" class="action">Next &gt;&gt;</a><?php } else { ?><span class="disabled heading">Next &gt;&gt;</span><?php }?></p>

<h3>Archive of Published Issues: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value ));?>
</h3>

<ul>
<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'issues','item'=>'issue'));
$_block_repeat=true;
echo $_block_plugin2->smartyIterate(array('from'=>'issues','item'=>'issue'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() )));?>
</a></li>
<?php $_block_repeat=false;
echo $_block_plugin2->smartyIterate(array('from'=>'issues','item'=>'issue'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</ul>


<br />

<div class="separator"></div>

<h3>Front Matter</h3>

<p>Front Matter associated with this Archival Unit includes:</p>

<ul>
	<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about"),$_smarty_tpl ) );?>
">About the Journal</a></li>
	<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
">Submission Guidelines</a></li>
	<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"contact"),$_smarty_tpl ) );?>
">Contact Information</a></li>
</ul>

<br />

<div class="separator"></div>

<h3>Metadata</h3>

<p>Metadata associated with this Archival Unit includes:</p>

<table class="data">
<tr>
	<td width="15%" class="label">Journal URL</td>
	<td width="85%" class="value"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath()),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getPath() ))),$_smarty_tpl ) );?>
</a></td>
</tr>
<tr>
	<td class="label">Title</td>
	<td class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedName() ));?>
</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('publisherInstitution')) {?>
<tr>
	<td class="label">Publisher</td>
	<td class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getData('publisherInstitution') ));?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedSetting('searchDescription')) {?>
<tr>
	<td class="label">Description</td>
	<td class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('searchDescription') ));?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['journal']->value->getData('onlineIssn')) {?>
<tr>
	<td class="label">ISSN</td>
	<td class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getData('onlineIssn') ));?>
</td>
</tr>
<?php } elseif ($_smarty_tpl->tpl_vars['journal']->value->getData('printIssn')) {?>
<tr>
	<td class="label">ISSN</td>
	<td class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getData('printIssn') ));?>
</td>
</tr>
<?php }?>
<tr>
	<td class="label">Language(s)</td>
	<td class="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'localeName', false, 'localeKey');
$_smarty_tpl->tpl_vars['localeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
$_smarty_tpl->tpl_vars['localeName']->do_else = false;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeName']->value ));?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));?>
)<br /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['journal']->value->getSetting('contactEmail')) {?>
<tr>
	<td class="label">Publisher Email</td>
	<td class="value"><?php echo smarty_function_mailto(array('address'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['journal']->value->getData('contactEmail') )),'encode'=>"hex"),$_smarty_tpl);?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('copyrightNotice')) {?>
<tr>
	<td class="label">Copyright</td>
	<td class="value"><?php echo nl2br($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('licenseTerms'));?>
</td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('openAccessPolicy')) {?>
<tr>
	<td class="label">Rights</td>
	<td class="value"><?php echo nl2br($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('openAccessPolicy'));?>
</td>
</tr>
<?php }?>
</table>
<?php }?>

<p>CLOCKSS system has permission to ingest, preserve, and serve this Archival Unit.</p>

<p><a href="http://pkp.sfu.ca/"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/lib/pkp/templates/images/pkp.gif" style="border: 0;" alt="The Public Knowledge Project" /></a></p>
<p>Open Journal Systems was developed by the Public Knowledge Project.</p>

</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
