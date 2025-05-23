<?php
/* Smarty version 3.1.39, created on 2024-02-12 15:27:59
  from 'app:frontendpagesissueArchive' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca38ff7a9d35_26840187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d55f24f7dbae142b911fdb30617e900a52af9a4' => 
    array (
      0 => 'app:frontendpagesissueArchive',
      1 => 1635521478,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/objects/issue_summary.tpl' => 1,
    'app:frontend/components/pagination.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65ca38ff7a9d35_26840187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitle", null);?>
	<?php if ($_smarty_tpl->tpl_vars['prevPage']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archivesPageNumber",'pageNumber'=>$_smarty_tpl->tpl_vars['prevPage']->value+1),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"archive.archives"),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>

<div class="page page_issue_archive">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['pageTitle']->value), 0, false);
?>
	<h1>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageTitle']->value ));?>

	</h1>

		<?php if (empty($_smarty_tpl->tpl_vars['issues']->value)) {?>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"current.noCurrentIssueDesc"),$_smarty_tpl ) );?>
</p>

		<?php } else { ?>
		<ul class="issues_archive">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['issues']->value, 'issue');
$_smarty_tpl->tpl_vars['issue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['issue']->value) {
$_smarty_tpl->tpl_vars['issue']->do_else = false;
?>
				<li>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<!-- 19/07/2019 - soydigital -->
		<div class="galleys">
			<h2>Segunda época</h2>
		    <ul class="galleys_links">
		        <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2009_n_19_ACTA_JUDICIAL_Dic_2009.pdf">Nº 19, diciembre 2009</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2008_n_18_ACTA_JUDICIAL_Oct_2008.pdf">Nº 18, octubre 2008</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2007_n_17_ACTA_JUDICIAL_Dic_2007.pdf">Nº 17, diciembre 2007</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2006_n_16_ACTA_JUDICIAL_Nov_2006.pdf">Nº 16, noviembre 2006</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2005_n_15_ACTA_JUDICIAL_Nov_2005.pdf">Nº 15, noviembre 2005</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2005_n_14_ACTA_JUDICIAL_Abril_2005.pdf">Nº 14, abril 2005</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2004_n_13_ACTA_JUDICIAL_Sep_2004.pdf">Nº 13, septiembre 2004</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2003_n_12_ACTA_JUDICIAL_Dic_2003.pdf">Nº 12, diciembre 2003</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2003_n_11_ACTA_JUDICIAL_Abril_2003.pdf">Nº 11, abril 2003</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2002_n_10_ACTA_JUDICIAL_Julio_2002.pdf">Nº 10, julio 2002</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2002_n_09_ActaJudicial_Abril_2002.pdf">Nº 9, abril 2002</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2001_n_08_ActaJudicial_Noviembre_2001.pdf">Nº 8, noviembre 2001</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2001_n_07_ACTA_JUDICIAL_Mayo_2001.pdf">Nº 7, mayo 2001</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2000_n_06_ACTA_JURIDICA_Dic_2000.pdf">Nº 6, diciembre 2000</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/2000_n_05_ACTA_JUDICIAL_Junio_2000.pdf">Nº 5, junio 2000</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/1999_n_04_ACTA_JUDICIAL_Dic_1999.pdf">Nº 4, diciembre 1999</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/1999_n_03_ACTA_JUDICIAL_Julio_1999.pdf">Nº 3, julio 1999</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/1998_n_02_ACTA_JUDICIAL_Sep-Dic_1998.pdf">Nº 2, septiembre 1998</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/segundaepoca/1998_n_01_ACTA_JUDICIAL_Mayo-Agosto_1998.pdf">Nº 1, agosto 1998</a></li>
			</ul>
			<h2>Primera época</h2>
		    <ul class="galleys_links">
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1995_n_06_ACTA_JURIDICA_Dic_1995.pdf">Nº 6, diciembre 1995</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1995_n_06_addenda_ACTA_JUDICIAL_nov_1995.pdf">Nº 6, noviembre 1995</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1995_n_05_ACTA_JUDICIAL_Marzo_1995.pdf">Nº 5, marzo 1995</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1994_n_04_ACTA_JUDICIAL_Marzo_1994.pdf">Nº 4, marzo 1994</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1993_n_03_ACTA_JUDICIAL_Oct_1993.pdf">Nº 3, octubre 1993</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1993_n_02_ACTA_JUDICIAL_Julio_1993.pdf">Nº 2, julio 1993</a></li>
			    <li><a class="obj_galley_link pdf" href="http://letradosdejusticia.es/revistaactajudicial/primeraepoca/1993_n_01_ActaJudicial_Marzo_1993.pdf">Nº 1, marzo 1993</a></li>
			</ul>
		</div>
		<!-- /soydigital -->

				<?php if ($_smarty_tpl->tpl_vars['prevPage']->value > 1) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['prevPage']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['prevPage']->value === 1) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'prevUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextPage']->value) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'nextUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive",'path'=>$_smarty_tpl->tpl_vars['nextPage']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php }?>
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prevUrl'=>$_smarty_tpl->tpl_vars['prevUrl']->value,'nextUrl'=>$_smarty_tpl->tpl_vars['nextUrl']->value,'showingStart'=>$_smarty_tpl->tpl_vars['showingStart']->value,'showingEnd'=>$_smarty_tpl->tpl_vars['showingEnd']->value,'total'=>$_smarty_tpl->tpl_vars['total']->value), 0, false);
?>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
