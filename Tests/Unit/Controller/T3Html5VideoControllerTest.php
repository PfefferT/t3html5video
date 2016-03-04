<?php
namespace Tpf\T3html5videoplayer\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
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
 * Test case for class Tpf\T3html5videoplayer\Controller\T3Html5VideoController.
 *
 */
class T3Html5VideoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Tpf\T3html5videoplayer\Controller\T3Html5VideoController
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = $this->getMock('Tpf\\T3html5videoplayer\\Controller\\T3Html5VideoController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllT3Html5VideosFromRepositoryAndAssignsThemToView() {

		$allT3Html5Videos = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$t3Html5VideoRepository = $this->getMock('Tpf\\T3html5videoplayer\\Domain\\Repository\\T3Html5VideoRepository', array('findAll'), array(), '', FALSE);
		$t3Html5VideoRepository->expects($this->once())->method('findAll')->will($this->returnValue($allT3Html5Videos));
		$this->inject($this->subject, 't3Html5VideoRepository', $t3Html5VideoRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('t3Html5Videos', $allT3Html5Videos);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenT3Html5VideoToView() {
		$t3Html5Video = new \Tpf\T3html5videoplayer\Domain\Model\T3Html5Video();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('t3Html5Video', $t3Html5Video);

		$this->subject->showAction($t3Html5Video);
	}
}
