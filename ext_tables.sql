#
# Table structure for table 'tx_t3html5videoplayer_domain_model_t3html5video'
#
CREATE TABLE tx_t3html5videoplayer_domain_model_t3html5video (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	type varchar(10) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	poster_image int(11) unsigned NOT NULL default '0',
	mp4 int(11) unsigned NOT NULL default '0',
	ogg int(11) unsigned NOT NULL default '0',
	webm int(11) unsigned NOT NULL default '0',
	width int(11) unsigned NOT NULL default '0',
	height int(11) unsigned NOT NULL default '0',
	muted tinyint(1) unsigned NOT NULL default '0',
	mediagroup varchar(255) DEFAULT '' NOT NULL,
	youtube_id varchar(255) DEFAULT '' NOT NULL,
	vimeo_id varchar(255) DEFAULT '' NOT NULL,
	video_autoplay tinyint(1) unsigned DEFAULT '0' NOT NULL,
	video_loop tinyint(1) unsigned DEFAULT '0' NOT NULL,
	video_controls tinyint(1) unsigned DEFAULT '0' NOT NULL,
	video_preloading varchar(10) DEFAULT '0' NOT NULL,
	vimeo_controls_color varchar(6) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);
