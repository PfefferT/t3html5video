<?php
/** TODO: add setting for enable youtube and enable vimeo */

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('t3html5videoplayer') . 'Resources/Public/Icons/tx_t3html5videoplayer_domain_model_t3html5video.gif',
		'requestUpdate' => 'type'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, type, title, poster_image, mp4, ogg, webm, youtube_id, vimeo_id, video_autoplay, video_loop, video_controls, video_preloading, youtube_start, youtube_end, youtube_color, youtube_theme, youtube_autohide, youtube_disable_keyboard, youtube_enable_js_api, youtube_fullscreen, youtube_hl, youtube_list_type, youtube_list, youtube_playlist, youtube_origin, youtube_modestbranding, youtube_player_api_id, youtube_plays_inline, youtube_rel, youtube_showinfo, youtube_cc_load_policy, youtube_iv_load_policy, width, height, muted, mediagroup, vimeo_autopause, vimeo_badge, vimeo_byline, vimeo_portrait, vimeo_title, vimeo_player_id,vimeo_controls_color',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, --div--;LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.label.video, type, title, poster_image, mp4, ogg, webm, youtube_id, vimeo_id, --div--;LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.label.configurations, video_autoplay, video_loop, video_controls, video_preloading, youtube_start, youtube_end, youtube_color, youtube_theme, youtube_autohide, youtube_disable_keyboard, youtube_enable_js_api, youtube_fullscreen, youtube_hl, youtube_list_type, youtube_list, youtube_playlist, youtube_origin, youtube_modestbranding, youtube_player_api_id, youtube_plays_inline, youtube_rel, youtube_showinfo, youtube_cc_load_policy, youtube_iv_load_policy, width, height, muted, mediagroup, vimeo_autopause, vimeo_badge, vimeo_byline, vimeo_portrait, vimeo_title, vimeo_player_id, vimeo_controls_color, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_t3html5videoplayer_domain_model_t3html5video',
				'foreign_table_where' => 'AND tx_t3html5videoplayer_domain_model_t3html5video.pid=###CURRENT_PID### AND tx_t3html5videoplayer_domain_model_t3html5video.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.type.file', 'file'),
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.type.youtube', 'youtube'),
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.type.vimeo', 'vimeo'),
				),
				'default' => 'file',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'poster_image' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.poster_image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'posterImage',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'mp4' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.mp4',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'mp4',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				'mp4'
			),
		),
		'ogg' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.ogg',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'ogg',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				'ogg,ogv'
			),
		),
		'webm' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.webm',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'webm',
				array('maxitems' => 1,
					'appearance' => array(
						'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference'
					),
					'foreign_types' => array(
						'0' => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						),
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => array(
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						)
					)
				),
				'webm'
			),
		),
		'youtube_id' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'vimeo_id' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'video_autoplay' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.video_autoplay',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'video_loop' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.video_loop',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'video_controls' => array(
			'displayCond' => 'FIELD:type:!=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.video_controls',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'video_preloading' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.video_preloading',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.preload.auto', 'auto'),
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.preload.metadata', 'metadata'),
					array('LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.preload.none', 'none'),
				),
				'default' => 'none',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'youtube_autohide' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.autohide',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(0, '0'),
					array(1, '1'),
					array(2, '2'),
				),
				'default' => '2',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'youtube_iv_load_policy' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.iv_load_policy',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(1, '1'),
					array(3, '3'),
				),
				'default' => '1',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'youtube_list_type' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.listType',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('--none--', ''),
					array('search', 'search'),
					array('user_uploads', 'user_uploads'),
					array('playlist', 'playlist'),
				),
				'default' => '',
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'youtube_cc_load_policy' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.cc_load_policy',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'youtube_disable_keyboard' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.disablekb',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'youtube_enable_js_api' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.enablejsapi',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'youtube_fullscreen' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.fs',
			'config' => array(
				'type' => 'check',
				'default' => '1',
			),
		),
		'youtube_modestbranding' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.modestbranding',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'youtube_plays_inline' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.playsinline',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'youtube_rel' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.rel',
			'config' => array(
				'type' => 'check',
				'default' => '1',
			),
		),
		'youtube_showinfo' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.showinfo',
			'config' => array(
				'type' => 'check',
				'default' => '1',
			),
		),
		'youtube_list' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.list',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_origin' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.origin',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_player_api_id' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.playerapiid',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_playlist' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.playlist',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_color' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.color',
			'config' => array(
				'type' => 'input',
				'default' => 'red',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_theme' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.theme',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_hl' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.hl',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'youtube_start' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.start',
			'config' => array(
				'type' => 'input',
				'default' => '0',
				'size' => 30,
				'eval' => 'integer,trim'
			),
		),
		'youtube_end' => array(
			'displayCond' => 'FIELD:type:=:youtube',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.youtube.end',
			'config' => array(
				'type' => 'input',
				'default' => '0',
				'size' => 30,
				'eval' => 'integer,trim'
			),
		),
		'width' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.width',
			'config' => array(
				'type' => 'input',
				'default' => '0',
				'size' => 30,
				'eval' => 'integer,trim'
			),
		),
		'height' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.height',
			'config' => array(
				'type' => 'input',
				'default' => '0',
				'size' => 30,
				'eval' => 'integer,trim'
			),
		),
		'mediagroup' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.mediagroup',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'muted' => array(
			'displayCond' => 'FIELD:type:=:file',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.muted',
			'config' => array(
				'type' => 'check',
				'default' => '0',
			),
		),
		'vimeo_controls_color' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.controls_color',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'default' => '00adef'
			),
		),
		'vimeo_autopause' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.autopause',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'vimeo_badge' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.bagde',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'vimeo_byline' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.byline',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'vimeo_portrait' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.portrait',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'vimeo_title' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.title',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		'vimeo_player_id' => array(
			'displayCond' => 'FIELD:type:=:vimeo',
			'exclude' => 1,
			'label' => 'LLL:EXT:t3html5videoplayer/Resources/Private/Language/locallang_db.xlf:tx_t3html5videoplayer_domain_model_t3html5video.vimeo.player_id',
			'config' => array(
				'type' => 'input',
				'default' => '',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);