<?php

namespace Tpf\T3html5videoplayer\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Tpf\T3html5videoplayer\Domain\Model\T3Html5Video.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class T3Html5VideoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Tpf\T3html5videoplayer\Domain\Model\T3Html5Video
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \Tpf\T3html5videoplayer\Domain\Model\T3Html5Video();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPosterImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getPosterImage()
		);
	}

	/**
	 * @test
	 */
	public function setPosterImageForFileReferenceSetsPosterImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPosterImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'posterImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMp4ReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getMp4()
		);
	}

	/**
	 * @test
	 */
	public function setMp4ForFileReferenceSetsMp4() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setMp4($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'mp4',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOggReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getOgg()
		);
	}

	/**
	 * @test
	 */
	public function setOggForFileReferenceSetsOgg() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setOgg($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'ogg',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWebmReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getWebm()
		);
	}

	/**
	 * @test
	 */
	public function setWebmForFileReferenceSetsWebm() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setWebm($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'webm',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getYoutubeIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getYoutubeId()
		);
	}

	/**
	 * @test
	 */
	public function setYoutubeIdForStringSetsYoutubeId() {
		$this->subject->setYoutubeId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'youtubeId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVimeoIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVimeoId()
		);
	}

	/**
	 * @test
	 */
	public function setVimeoIdForStringSetsVimeoId() {
		$this->subject->setVimeoId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'vimeoId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVideoAutoplayReturnsInitialValueForBool() {
		$this->assertSame(
			FALSE,
			$this->subject->getVideoAutoplay()
		);
	}

	/**
	 * @test
	 */
	public function setVideoAutoplayForBoolSetsVideoAutoplay() {
		$this->subject->setVideoAutoplay(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'videoAutoplay',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVideoLoopReturnsInitialValueForBool() {
		$this->assertSame(
			FALSE,
			$this->subject->getVideoLoop()
		);
	}

	/**
	 * @test
	 */
	public function setVideoLoopForBoolSetsVideoLoop() {
		$this->subject->setVideoLoop(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'videoLoop',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVideoControlsReturnsInitialValueForBool() {
		$this->assertSame(
			FALSE,
			$this->subject->getVideoControls()
		);
	}

	/**
	 * @test
	 */
	public function setVideoControlsForBoolSetsVideoControls() {
		$this->subject->setVideoControls(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'videoControls',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVideoPreloadingReturnsInitialValueForInt() {	}

	/**
	 * @test
	 */
	public function setVideoPreloadingForIntSetsVideoPreloading() {	}
}
