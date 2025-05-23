<?php
/* Smarty version 3.1.39, created on 2024-02-12 14:37:24
  from 'plugins-1-plugins-generic-pluginUpdateNotification-generic-pluginUpdateNotification:updateNotificationPlugins' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65ca2d24e76090_83833112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6062b907e2e9998df13499c3b0fb3557ff0248d9' => 
    array (
      0 => 'plugins-1-plugins-generic-pluginUpdateNotification-generic-pluginUpdateNotification:updateNotificationPlugins',
      1 => 1635422173,
      2 => 'plugins-1-plugins-generic-pluginUpdateNotification-generic-pluginUpdateNotification',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 1,
  ),
),false)) {
function content_65ca2d24e76090_83833112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="updateNotificationPlugins" class="pkp_notification">
    <?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>uniqid("pluginsUpgradeWarning-"),'notificationStyleClass'=>"notifyWarning",'notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "common.warning" )),'notificationContents'=>$_smarty_tpl->tpl_vars['notificationText']->value), 0, false);
?>
</div>

<?php echo '<script'; ?>
>
    var div = document.getElementById('updateNotificationPlugins');
    var title = document.getElementsByClassName('pkp_page_title')[0];
    
    if(!title){
        title = document.getElementsByClassName('app__pageHeading')[0];
    }
    
    title.parentNode.insertBefore(div, title.nextSibling);
<?php echo '</script'; ?>
>


<?php }
}
