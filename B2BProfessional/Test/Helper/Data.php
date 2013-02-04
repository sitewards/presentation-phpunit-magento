<?php

class Sitewards_B2BProfessional_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case {

	private $oHelper = null;

	/**
	 * @loadFixture testCheckAllowedByConfig
	 */
	public function testCheckAllowedByConfigSuccess(){
		$this->oHelper = Mage::helper('b2bprofessional');
		$bAllowed = $this->oHelper->checkAllowed();
		$this->assertEquals(true, $bAllowed);
	}

	/**
	 * @param int $iFirstNumber
	 * @param int $iSecondNumber
	 * @dataProvider dataProvider
	 */
	public function testAddition($iFirstNumber, $iSecondNumber){
		$this->oHelper = Mage::helper('b2bprofessional');
		$iCalculatedValue = $this->oHelper->addTwoNumbers($iFirstNumber, $iSecondNumber);
		$iExpectedValue = $this->expected($iFirstNumber . '+'  . $iSecondNumber)->getSum();
		$this->assertEquals($iExpectedValue, $iCalculatedValue);
	}

	public function testDefaultAllowed(){
		$oSessionMock = $this->getModelMock('customer/session', array('isLoggedIn'));

		$oSessionMock->expects($this->any())
			->method('isLoggedIn')
			->will($this->returnValue(true));

		$this->replaceByMock('singleton', 'customer/session', $oSessionMock);

		$oHelper = Mage::helper('b2bprofessional');
		$bLoggedIn = $oHelper->checkLoggedIn();

		$this->assertEquals(true, $bLoggedIn);

	}

}