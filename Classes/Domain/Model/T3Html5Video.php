<?php
namespace Tpf\T3html5videoplayer\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * T3Html5Video
 */
class T3Html5Video extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Title
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title = '';

	/**
	 * poster_image
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $posterImage = NULL;

	/**
	 * MP4
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $mp4 = NULL;

	/**
	 * OGG
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $ogg = NULL;

	/**
	 * WebM
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $webm = NULL;

	/**
	 * Youtube Id
	 * 
	 * @var string
	 */
	protected $youtubeId = '';

	/**
	 * $youtubeAutohide
	 *
	 * @var int
	 */
	protected $youtubeAutohide = 2;

	/**
	 * $youtubeCcLoadPolicy
	 *
	 * @var int
	 */
	protected $youtubeCcLoadPolicy = 0;

	/**
	 * $youtubeColor
	 *
	 * @var string
	 */
	protected $youtubeColor = 'red';

	/**
	 * $youtubeTheme
	 *
	 * @var string
	 */
	protected $youtubeTheme = '';

	/**
	 * $youtubeStart
	 *
	 * @var int
	 */
	protected $youtubeStart = 0;

	/**
	 * $youtubeEnd
	 *
	 * @var int
	 */
	protected $youtubeEnd = 0;

	/**
	 * $youtubeEnableJsApi
	 *
	 * @var int
	 */
	protected $youtubeEnableJsApi = 0;

	/**
	 * $youtubeDisableKeyboard
	 *
	 * @var int
	 */
	protected $youtubeDisableKeyboard = 0;

	/**
	 * $youtubeFullscreen
	 *
	 * @var int
	 */
	protected $youtubeFullscreen = 1;

	/**
	 * $youtubeHl
	 *
	 * @var string
	 */
	protected $youtubeHl = '';

	/**
	 * $youtubeIvLoadPolicy
	 *
	 * @var int
	 */
	protected $youtubeIvLoadPolicy = 1;

	/**
	 * $youtubeListType
	 *
	 * @var string
	 */
	protected $youtubeListType = '';

	/**
	 * $youtubeLlist
	 *
	 * @var string
	 */
	protected $youtubeLlist = '';

	/**
	 * $youtubeModestbranding
	 *
	 * @var int
	 */
	protected $youtubeModestbranding = 0;

	/**
	 * $youtubeOrigin
	 *
	 * @var string
	 */
	protected $youtubeOrigin = '';

	/**
	 * $youtubePlayerApiId
	 *
	 * @var string
	 */
	protected $youtubePlayerApiId = '';

	/**
	 * $youtubePlaylist
	 *
	 * @var string
	 */
	protected $youtubePlaylist = '';

	/**
	 * $youtubePlaysInline
	 *
	 * @var int
	 */
	protected $youtubePlaysInline = 0;

	/**
	 * $youtubeRel
	 *
	 * @var int
	 */
	protected $youtubeRel = 1;

	/**
	 * $youtubeShowInfo
	 *
	 * @var int
	 */
	protected $youtubeShowInfo = 1;

	/**
	 * Vimeo Id
	 * 
	 * @var string
	 */
	protected $vimeoId = '';

	/**
	 * Autoplay
	 * 
	 * @var bool
	 */
	protected $videoAutoplay = FALSE;

	/**
	 * Loop
	 * 
	 * @var bool
	 */
	protected $videoLoop = FALSE;

	/**
	 * Controls
	 * 
	 * @var bool
	 */
	protected $videoControls = FALSE;

	/**
	 * Preloading
	 * 
	 * @var int
	 */
	protected $videoPreloading = 0;

	/**
	 * Type
	 *
	 * @var string
	 */
	protected $type = '';

	/**
	 * Mediagroup
	 *
	 * @var string
	 */
	protected $mediagroup = '';

	/**
	 * Muted
	 *
	 * @var bool
	 */
	protected  $muted = FALSE;

	/**
	 * Width
	 *
	 * @var int
	 */
	protected  $width = 0;

	/**
	 * Height
	 *
	 * @var int
	 */
	protected  $height = 0;

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * Returns the title
	 * 
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 * 
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the posterImage
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $posterImage
	 */
	public function getPosterImage() {
		return $this->posterImage;
	}

	/**
	 * Sets the posterImage
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $posterImage
	 * @return void
	 */
	public function setPosterImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $posterImage) {
		$this->posterImage = $posterImage;
	}

	/**
	 * Returns the mp4
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $mp4
	 */
	public function getMp4() {
		return $this->mp4;
	}

	/**
	 * Sets the mp4
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $mp4
	 * @return void
	 */
	public function setMp4(\TYPO3\CMS\Extbase\Domain\Model\FileReference $mp4) {
		$this->mp4 = $mp4;
	}

	/**
	 * Returns the ogg
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $ogg
	 */
	public function getOgg() {
		return $this->ogg;
	}

	/**
	 * Sets the ogg
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $ogg
	 * @return void
	 */
	public function setOgg(\TYPO3\CMS\Extbase\Domain\Model\FileReference $ogg) {
		$this->ogg = $ogg;
	}

	/**
	 * Returns the webm
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $webm
	 */
	public function getWebm() {
		return $this->webm;
	}

	/**
	 * Sets the webm
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $webm
	 * @return void
	 */
	public function setWebm(\TYPO3\CMS\Extbase\Domain\Model\FileReference $webm) {
		$this->webm = $webm;
	}

	/**
	 * Returns the youtubeId
	 * 
	 * @return string $youtubeId
	 */
	public function getYoutubeId() {
		return $this->youtubeId;
	}

	/**
	 * Sets the youtubeId
	 * 
	 * @param string $youtubeId
	 * @return void
	 */
	public function setYoutubeId($youtubeId) {
		$this->youtubeId = $youtubeId;
	}

	/**
	 * Returns the vimeoId
	 * 
	 * @return string $vimeoId
	 */
	public function getVimeoId() {
		return $this->vimeoId;
	}

	/**
	 * Sets the vimeoId
	 * 
	 * @param string $vimeoId
	 * @return void
	 */
	public function setVimeoId($vimeoId) {
		$this->vimeoId = $vimeoId;
	}

	/**
	 * Returns the videoAutoplay
	 * 
	 * @return bool $videoAutoplay
	 */
	public function getVideoAutoplay() {
		return $this->videoAutoplay;
	}

	/**
	 * Sets the videoAutoplay
	 * 
	 * @param bool $videoAutoplay
	 * @return void
	 */
	public function setVideoAutoplay($videoAutoplay) {
		$this->videoAutoplay = $videoAutoplay;
	}

	/**
	 * Returns the boolean state of videoAutoplay
	 * 
	 * @return bool
	 */
	public function isVideoAutoplay() {
		return $this->videoAutoplay;
	}

	/**
	 * Returns the videoLoop
	 * 
	 * @return bool $videoLoop
	 */
	public function getVideoLoop() {
		return $this->videoLoop;
	}

	/**
	 * Sets the videoLoop
	 * 
	 * @param bool $videoLoop
	 * @return void
	 */
	public function setVideoLoop($videoLoop) {
		$this->videoLoop = $videoLoop;
	}

	/**
	 * Returns the boolean state of videoLoop
	 * 
	 * @return bool
	 */
	public function isVideoLoop() {
		return $this->videoLoop;
	}

	/**
	 * Returns the videoControls
	 * 
	 * @return bool $videoControls
	 */
	public function getVideoControls() {
		return $this->videoControls;
	}

	/**
	 * Sets the videoControls
	 * 
	 * @param bool $videoControls
	 * @return void
	 */
	public function setVideoControls($videoControls) {
		$this->videoControls = $videoControls;
	}

	/**
	 * Returns the boolean state of videoControls
	 * 
	 * @return bool
	 */
	public function isVideoControls() {
		return $this->videoControls;
	}

	/**
	 * Returns the videoPreloading
	 * 
	 * @return int $videoPreloading
	 */
	public function getVideoPreloading() {
		return $this->videoPreloading;
	}

	/**
	 * Sets the videoPreloading
	 * 
	 * @param int $videoPreloading
	 * @return void
	 */
	public function setVideoPreloading($videoPreloading) {
		$this->videoPreloading = $videoPreloading;
	}

	/**
	 * @return string
	 */
	public function getMediagroup()
	{
		return $this->mediagroup;
	}

	/**
	 * @param string $mediagroup
	 */
	public function setMediagroup($mediagroup)
	{
		$this->mediagroup = $mediagroup;
	}

	/**
	 * @return boolean
	 */
	public function isMuted()
	{
		return $this->muted;
	}

	/**
	 * @param boolean $muted
	 */
	public function setMuted($muted)
	{
		$this->muted = $muted;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param int $height
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}

}