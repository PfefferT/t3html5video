<?php
namespace Tpf\T3html5videoplayer\Controller;


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
 * T3Html5VideoController
 */
class T3Html5VideoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * t3Html5VideoRepository
	 * 
	 * @var \Tpf\T3html5videoplayer\Domain\Repository\T3Html5VideoRepository
	 * @inject
	 */
	protected $t3Html5VideoRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$t3Html5Videos = $this->t3Html5VideoRepository->findAll();
		$this->view->assign('t3Html5Videos', array($t3Html5Videos));
	}

	/**
	 * action show
	 * 
	 * @param \Tpf\T3html5videoplayer\Domain\Model\T3Html5Video $t3Html5Video
	 * @return void
	 */
	public function showAction(\Tpf\T3html5videoplayer\Domain\Model\T3Html5Video $t3Html5Video) {
		$this->view->assign('t3Html5Video', $t3Html5Video);
	}

}