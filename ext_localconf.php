<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Tpf.' . $_EXTKEY,
	'Html5video',
	array(
		'T3Html5Video' => 'list',
	),
	// non-cacheable actions
	array(
		'T3Html5Video' => '',
		
	)
);
