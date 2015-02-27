<?php
namespace FluidTYPO3\Vhs\Tests\Unit\ViewHelpers\Math;

/*
 * This file is part of the FluidTYPO3/Vhs project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

/**
 * @protection off
 * @author Claus Due <claus@namelesscoder.net>
 * @package Vhs
 */
class SubtractViewHelperTest extends AbstractMathViewHelperTest {

	/**
	 * @test
	 */
	public function testSingleArgumentIterator() {
		$this->executeSingleArgumentTest(array(8, 2), -10);
	}

	/**
	 * @test
	 */
	public function testDualArguments() {
		$this->executeDualArgumentTest(8, 2, 6);
	}

	/**
	 * @test
	 */
	public function executeMissingArgumentTest() {
		$result = $this->executeViewHelper(array());
		$this->assertEquals('Required argument "b" was not supplied', $result);
	}

	/**
	 * @test
	 */
	public function executeInvalidArgumentTypeTest() {
		$result = $this->executeViewHelper(array('b' => 1, 'fail' => TRUE));
		$this->assertEquals('Required argument "a" was not supplied', $result);
	}

}
