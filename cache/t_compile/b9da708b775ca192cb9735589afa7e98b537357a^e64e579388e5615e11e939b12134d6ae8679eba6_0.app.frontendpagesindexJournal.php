<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:35:01
  from 'app:frontendpagesindexJournal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2c952a1d89_76716175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal',
      1 => 1635522591,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/announcement_summary.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65ca2c952a1d89_76716175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/coseju/public_html/revistaactajudicial/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()), 0, false);
?>

<div class="page_index_journal">

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Index::journal"),$_smarty_tpl ) );?>


	<?php if (!$_smarty_tpl->tpl_vars['activeTheme']->value->getOption('useHomepageImageAsHeader') && $_smarty_tpl->tpl_vars['homepageImage']->value) {?>
		<div class="homepage_image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'],"url" ));?>
"<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value['altText']) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['altText'] ));?>
"<?php }?>>
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['activeTheme']->value->getOption('showDescriptionInJournalIndex')) {?>
		<section class="homepage_about">
			<a id="homepageAbout"></a>
			<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutContext"),$_smarty_tpl ) );?>
</h2>
			<?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedData('description');?>

		</section>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && count($_smarty_tpl->tpl_vars['announcements']->value)) {?>
		<section class="cmp_announcements highlight_first">
			<a id="homepageAnnouncements"></a>
			<h2>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>

			</h2>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement', false, NULL, 'announcements', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']++;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value) {?>
					<?php break 1;?>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration'] : null) == 1) {?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"h3"), 0, true);
?>
					<div class="more">
				<?php } else { ?>
					<article class="obj_announcement_summary">
						<h4>
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

							</a>
						</h4>
						<div class="date">
							<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatePosted(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

						</div>
					</article>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div><!-- .more -->
		</section>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
		<section class="current_issue">
			<a id="homepageIssue"></a>
			<h2>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>

			</h2>
			<div class="current_issue_title">
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"current"),$_smarty_tpl ) );?>
" class="read_more">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

				</a>
			</div>
		</section>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['additionalHomeContent']->value) {?>
		<div class="additional_content">
			<?php echo $_smarty_tpl->tpl_vars['additionalHomeContent']->value;?>

		</div>
	<?php }?>
</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
