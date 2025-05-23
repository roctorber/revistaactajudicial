{**
 * templates/frontend/pages/issueArchive.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a list of recent issues.
 *
 * @uses $issues Array Collection of issues to display
 * @uses $prevPage int The previous page number
 * @uses $nextPage int The next page number
 * @uses $showingStart int The number of the first item on this page
 * @uses $showingEnd int The number of the last item on this page
 * @uses $total int Count of all published monographs
 *}
{capture assign="pageTitle"}
	{if $prevPage}
		{translate key="archive.archivesPageNumber" pageNumber=$prevPage+1}
	{else}
		{translate key="archive.archives"}
	{/if}
{/capture}
{include file="frontend/components/header.tpl" pageTitleTranslated=$pageTitle}

<div class="page page_issue_archive">
	{include file="frontend/components/breadcrumbs.tpl" currentTitle=$pageTitle}
	<h1>
		{$pageTitle|escape}
	</h1>

	{* No issues have been published *}
	{if empty($issues)}
		<p>{translate key="current.noCurrentIssueDesc"}</p>

	{* List issues *}
	{else}
		<ul class="issues_archive">
			{foreach from=$issues item="issue"}
				<li>
					{include file="frontend/objects/issue_summary.tpl"}
				</li>
			{/foreach}
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

		{* Pagination *}
		{if $prevPage > 1}
			{capture assign=prevUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive" path=$prevPage}{/capture}
		{elseif $prevPage === 1}
			{capture assign=prevUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}{/capture}
		{/if}
		{if $nextPage}
			{capture assign=nextUrl}{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive" path=$nextPage}{/capture}
		{/if}
		{include
			file="frontend/components/pagination.tpl"
			prevUrl=$prevUrl
			nextUrl=$nextUrl
			showingStart=$showingStart
			showingEnd=$showingEnd
			total=$total
		}
	{/if}
</div>

{include file="frontend/components/footer.tpl"}
