<?php
/* Smarty version 3.1.39, created on 2024-02-12 15:27:51
  from 'app:frontendobjectsissuetoc.t' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca38f734c968_59541512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26de9c47ced54328a8eb56e39bb4d4079aa049c6' => 
    array (
      0 => 'app:frontendobjectsissuetoc.t',
      1 => 1630418526,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/notification.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 1,
    'app:frontend/objects/article_summary.tpl' => 1,
  ),
),false)) {
function content_65ca38f734c968_59541512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/coseju/public_html/revistaactajudicial/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!$_smarty_tpl->tpl_vars['heading']->value) {?>
	<?php $_smarty_tpl->_assignInScope('heading', "h2");
}
$_smarty_tpl->_assignInScope('articleHeading', "h3");
if ($_smarty_tpl->tpl_vars['heading']->value == "h3") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h4");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h4") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h5");
} elseif ($_smarty_tpl->tpl_vars['heading']->value == "h5") {?>
	<?php $_smarty_tpl->_assignInScope('articleHeading', "h6");
}?>
<div class="obj_issue_toc">

		<?php if (!$_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'messageKey'=>"editor.issues.preview"), 0, false);
?>
	<?php }?>

		<div class="heading">

				<?php $_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl());?>
		<?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
			<a class="cover" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"view",'page'=>"issue",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "defaultAltText", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.viewIssueIdentification",'identification'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ))),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
" alt="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() )))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['defaultAltText']->value : $tmp);?>
">
			</a>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['issue']->value->hasDescription()) {?>
			<div class="description">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedDescription() ));?>

			</div>
		<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['issue']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
			<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
				<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
				<div class="pub_id <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() ));?>
">
					<span class="type">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdDisplayType() ));?>
:
					</span>
					<span class="id">
						<?php if ($_smarty_tpl->tpl_vars['doiUrl']->value) {?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doiUrl']->value ));?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['pubId']->value;?>

						<?php }?>
					</span>
				</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
			<div class="published">
				<span class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
:
				</span>
				<span class="value">
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

				</span>
			</div>
		<?php }?>
	</div>

		<?php if ($_smarty_tpl->tpl_vars['issueGalleys']->value) {?>
		<div class="galleys">
			<<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
 id="issueTocGalleyLabel">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.fullIssue"),$_smarty_tpl ) );?>

			</<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
			<ul class="galleys_links">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issueGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['issue']->value,'labelledBy'=>"issueTocGalleyLabel",'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('purchaseIssueFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getData('currency')), 0, true);
?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>

		<div class="sections">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedSubmissions']->value, 'section', false, NULL, 'sections', array (
));
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
		<div class="section">
		<?php if ($_smarty_tpl->tpl_vars['section']->value['articles']) {?>
			<?php if ($_smarty_tpl->tpl_vars['section']->value['title']) {?>
				<<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>

				</<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
>
			<?php }?>
			<ul class="cmp_article_list articles">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
					<li>
						<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/article_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>$_smarty_tpl->tpl_vars['articleHeading']->value), 0, true);
?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div><!-- .sections -->
</div>
<?php }
}
