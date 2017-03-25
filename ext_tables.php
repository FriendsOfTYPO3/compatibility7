<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('indexed_search')) {
        $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['tx_indexed_search_pi_wizicon'] =
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('compatibility7') . 'PHP/class.tx_indexed_search_pi_wizicon.php';
    }

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('version') &&
        !\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('workspaces')) {
        $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418676] = \TYPO3\CMS\Compatibility7\ContextMenu\ItemProvider::class;
    }

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Compatibility7\Report\Status\SystemStatus::class;
}
