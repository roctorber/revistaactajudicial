<?php
/**
 * @file plugins/generic/AuthorsHistory/AuthorsHistoryPlugin.inc.php
 *
 * Copyright (c) 2020-2021 Lepidus Tecnologia
 * Copyright (c) 2020-2021 SciELO
 * Distributed under the GNU GPL v3. For full terms see LICENSE or https://www.gnu.org/licenses/gpl-3.0.txt
 * 
 * @class AuthorsHistoryPlugin
 * @ingroup plugins_generic_authorsHistory
 * @brief Plugin class for the Authors History plugin.
 */
import('lib.pkp.classes.plugins.GenericPlugin');
import('plugins.generic.authorsHistory.classes.AuthorsHistoryDAO');


class AuthorsHistoryPlugin extends GenericPlugin {
    public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path, $mainContextId);
        
        if (!Config::getVar('general', 'installed') || defined('RUNNING_UPGRADE'))
            return true;
        
        if ($success && $this->getEnabled($mainContextId)) {
            $authorsHistoryDAO = new AuthorsHistoryDAO();
			DAORegistry::registerDAO('AuthorsHistoryDAO', $authorsHistoryDAO);

            HookRegistry::register('Template::Workflow::Publication', array($this, 'addToWorkflow'));
        }
        
        return $success;
    }
    
    private function getAuthorsData($submission, $itemsPerPageLimit){
        $listAuthorsData = array();
        $correspondenceContact = $submission->getCurrentPublication()->getData('primaryContactId');
        $contextId = $submission->getData('contextId');

        foreach ($submission->getAuthors() as $author) {
            $authorData = array();
            $authorData['name'] = $author->getFullName();
            $authorData['orcid'] = $author->getOrcid();
            $authorData['email'] = $author->getEmail();
            $authorData['correspondingAuthor'] = ($correspondenceContact == $author->getId());

            $givenName = $author->getLocalizedGivenName();
            $authorsHistoryDAO = new AuthorsHistoryDAO();
            
            $authorData['submissions'] = $authorsHistoryDAO->getAuthorSubmissions(
                $contextId,
                $authorData['orcid'],
                $authorData['email'],
                $givenName,
                $itemsPerPageLimit
            );

            $listAuthorsData[] = $authorData;
        }
        return $listAuthorsData;
    }

    function addToWorkflow($hookName, $params) {
        $smarty =& $params[1];
		$output =& $params[2];
        $submission = $smarty->get_template_vars('submission');
        $request = Application::get()->getRequest();
        $user = $request->getUser();

        $userService = Services::get('user');
        $smarty->assign(
            'userIsManager',
            $user->hasRole(Application::getWorkflowTypeRoles()[WORKFLOW_TYPE_EDITORIAL], $request->getContext()->getId())
        );
        $itemsPerPage = $request->getContext()->getData('itemsPerPage');
        $smarty->assign('listDataAuthors', $this->getAuthorsData($submission, $itemsPerPage));
        $smarty->assign('itemsPerPage', $itemsPerPage);
        
        $output .= sprintf(
			'<tab id="authorsHistory" label="%s">%s</tab>',
			__('plugins.generic.authorsHistory.displayName'),
			$smarty->fetch($this->getTemplateResource('authorsHistory.tpl'))
		);
    }

    public function getDisplayName() {
		return __('plugins.generic.authorsHistory.displayName');
	}

	public function getDescription() {
		return __('plugins.generic.authorsHistory.description');
	}
}