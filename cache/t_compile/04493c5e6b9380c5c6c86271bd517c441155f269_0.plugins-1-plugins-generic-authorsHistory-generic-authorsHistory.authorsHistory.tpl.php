<?php
/* Smarty version 3.1.39, created on 2024-02-14 11:18:38
  from 'plugins-1-plugins-generic-authorsHistory-generic-authorsHistory:authorsHistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65cca18eb5f7a5_95147700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04493c5e6b9380c5c6c86271bd517c441155f269' => 
    array (
      0 => 'plugins-1-plugins-generic-authorsHistory-generic-authorsHistory:authorsHistory.tpl',
      1 => 1635517780,
      2 => 'plugins-1-plugins-generic-authorsHistory-generic-authorsHistory',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cca18eb5f7a5_95147700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="/plugins/generic/authorsHistory/styles/authorsHistory.css">
<?php echo '<script'; ?>
 type="text/javascript" src="/plugins/generic/authorsHistory/templates/pagination.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('currentAuthor', 0);?>
<div id="authorsHistory">
    <div id="historyHeader">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.authorsHistory.displayName"),$_smarty_tpl ) );?>
</h2>
    </div>
    <div id="historyBody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listDataAuthors']->value, 'authorData');
$_smarty_tpl->tpl_vars['authorData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['authorData']->value) {
$_smarty_tpl->tpl_vars['authorData']->do_else = false;
?>
            <div class="authorHistory">
                <h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorData']->value['name'] ));?>
</h3>
                <?php if ($_smarty_tpl->tpl_vars['authorData']->value['correspondingAuthor']) {?>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.selectPrincipalContact"),$_smarty_tpl ) );?>
</span><br>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['authorData']->value['orcid']) {?>
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorData']->value['orcid'] ));?>
" target="_blank" rel="noopener noreferrer">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.authorsHistory.orcid"),$_smarty_tpl ) );?>
:</strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorData']->value['orcid'] ));?>

                    </a>
                <?php } else { ?>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.authorsHistory.noORCID"),$_smarty_tpl ) );?>
</span>
                <?php }?>
                <br><span><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.email"),$_smarty_tpl ) );?>
:</strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['authorData']->value['email'] ));?>
</span>

                <?php if (empty($_smarty_tpl->tpl_vars['authorData']->value['submissions'])) {?>
                    <p class="authorPublications"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.authorsHistory.noPublications"),$_smarty_tpl ) );?>
</p>
                <?php } else { ?>

                <div class="authorPublications">

                <?php $_smarty_tpl->_assignInScope('totalAuthorSubmissions', count($_smarty_tpl->tpl_vars['authorData']->value['submissions']));?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['itemsPerPage']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('totalPages', ceil($_smarty_tpl->tpl_vars['totalAuthorSubmissions']->value/$_prefixVariable1));?>
        
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authorData']->value['submissions'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
                            <div class="authorPublication">
                                <div class="submissionId">
                                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value->getId() ));?>
</span>
                                </div>
                                <div class="submissionTitle">
                                    <?php if ($_smarty_tpl->tpl_vars['userIsManager']->value) {?>
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"workflow",'op'=>"access",'path'=>$_smarty_tpl->tpl_vars['sub']->value->getBestId()),$_smarty_tpl ) );?>
" target="_blank" rel="noopener noreferrer">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value->getCurrentPublication()->getLocalizedFullTitle() ));?>

                                        </a>
                                    <?php } else { ?>
                                        <span>
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value->getCurrentPublication()->getLocalizedFullTitle() ));?>

                                        </span>
                                    <?php }?>
                                </div>
                                <div class="submissionStatus">
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value->getStatus() == STATUS_PUBLISHED) {?>
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"preprint",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['sub']->value->getBestId()),$_smarty_tpl ) );?>
" target="_blank" rel="noopener noreferrer">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['sub']->value->getStatusKey()),$_smarty_tpl ) );?>

                                        </a>
                                    <?php } else { ?>
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['sub']->value->getStatusKey()),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </div>
                            </div>
                                     
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php echo '<script'; ?>
>
                    var authors = document.getElementsByClassName("authorPublications")[<?php echo $_smarty_tpl->tpl_vars['currentAuthor']->value;?>
];
                    var authorInformation = authors.getElementsByClassName("authorPublication");

                    if(<?php echo $_smarty_tpl->tpl_vars['itemsPerPage']->value;?>
 < <?php echo $_smarty_tpl->tpl_vars['totalAuthorSubmissions']->value;?>
){
                        for(iterator= 0; iterator < ( <?php echo $_smarty_tpl->tpl_vars['totalAuthorSubmissions']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['itemsPerPage']->value;?>
 ); iterator++)
                        authorInformation[iterator].style.display = 'none';
                    }
                    <?php echo '</script'; ?>
>

                </div>
                <?php $_smarty_tpl->_assignInScope('currentAuthor', $_smarty_tpl->tpl_vars['currentAuthor']->value+1);?>
                
                <?php }?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.authorsHistory.pages"),$_smarty_tpl ) );?>
 >>
                <?php
$_smarty_tpl->tpl_vars['currentPage'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['currentPage']->step = 1;$_smarty_tpl->tpl_vars['currentPage']->total = (int) ceil(($_smarty_tpl->tpl_vars['currentPage']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['currentPage']->step));
if ($_smarty_tpl->tpl_vars['currentPage']->total > 0) {
for ($_smarty_tpl->tpl_vars['currentPage']->value = 1, $_smarty_tpl->tpl_vars['currentPage']->iteration = 1;$_smarty_tpl->tpl_vars['currentPage']->iteration <= $_smarty_tpl->tpl_vars['currentPage']->total;$_smarty_tpl->tpl_vars['currentPage']->value += $_smarty_tpl->tpl_vars['currentPage']->step, $_smarty_tpl->tpl_vars['currentPage']->iteration++) {
$_smarty_tpl->tpl_vars['currentPage']->first = $_smarty_tpl->tpl_vars['currentPage']->iteration === 1;$_smarty_tpl->tpl_vars['currentPage']->last = $_smarty_tpl->tpl_vars['currentPage']->iteration === $_smarty_tpl->tpl_vars['currentPage']->total;?>
                    <button class="pageButtons" onclick="showSubmissionsPage(<?php echo $_smarty_tpl->tpl_vars['itemsPerPage']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['totalAuthorSubmissions']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['currentAuthor']->value;?>
)" type="button">
                    <?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>

                    </button>
                <?php }
}
?> 

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
