<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Tripuls.' . $_EXTKEY,
	'Html5video',
	'Html5 Video'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 't3html5videoplayer');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3html5videoplayer_domain_model_t3html5video', 'EXT:t3html5videoplayer/Resources/Private/Language/locallang_csh_tx_t3html5videoplayer_domain_model_t3html5video.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3html5videoplayer_domain_model_t3html5video');
