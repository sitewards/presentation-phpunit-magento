<?php

class Sitewards_B2BProfessional_Test_CartController extends EcomDev_PHPUnit_Test_Case_Controller{

	public function testCartRewrite(){
		$this->dispatch('checkout/cart');
		$this->assertRequestControllerModule('Sitewards_B2BProfessional');
	}

	public function testPageContainsShoppingCartEmpty(){
		$this->dispatch('checkout/cart');
		$this->assertResponseBodyContains('Shopping Cart is Empty');
	}

	public function testCartFooterContainsAtLeastFourLinks(){
		$this->dispatch('checkout/cart');
		$this->assertLayoutBlockActionInvokedAtLeast('footer_links', 'addLink', 4, '');
	}

}