<?php
if(!defined('TYPO3_MODE')){
    die('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('vt20','Configuration/TSconfig/BackendLayout.tsconfig','Default BackendLayouts');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('vt20','Configuration/TSconfig/Page_general.tsconfig','Default PageTSconfig');