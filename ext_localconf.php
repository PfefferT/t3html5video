<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Tripuls.' . $_EXTKEY,
	'Html5video',
	array(
		'Html5Video' => 'render',
		
	),
	// non-cacheable actions
	array(
		'T3Html5Video' => '',
		
	)
);
