<?php

class Sitewards_B2BProfessional_Test_Config_Main extends EcomDev_PHPUnit_Test_Case_Config {

	public function testModuleActive(){
		$this->assertModuleIsActive();
	}

	public function testModuleVersion(){
		$this->assertModuleVersion('2.0.1');
	}

	public function testModelAliases(){
		$this->assertModelAlias(
			'b2bprofessional/customer',
			'Sitewards_B2BProfessional_Model_Customer'
		);
		$this->assertModelAlias(
			'b2bprofessional/system_config_source_Category',
			'Sitewards_B2BProfessional_Model_System_Config_Source_Category'
		);
	}

	public function testBlockAliases() {
		// price
		$this->assertBlockAlias(
			'b2bprofessional/price',
			'Sitewards_B2BProfessional_Block_Price'
		);
		// configurable
		$this->assertBlockAlias(
			'b2bprofessional/configurable',
			'Sitewards_B2BProfessional_Block_Configurable'
		);
		// catalog/price
		$this->assertBlockAlias(
			'b2bprofessional/catalog_price',
			'Sitewards_B2BProfessional_Block_Catalog_Price'
		);
		// bundle option blocks
		$this->assertBlockAlias(
			'b2bprofessional/catalog_product_view_type_bundle_option_checkbox',
			'Sitewards_B2BProfessional_Block_Catalog_Product_View_Type_Bundle_Option_Checkbox'
		);
		$this->assertBlockAlias(
			'b2bprofessional/catalog_product_view_type_bundle_option_multi',
			'Sitewards_B2BProfessional_Block_Catalog_Product_View_Type_Bundle_Option_Multi'
		);
		$this->assertBlockAlias(
			'b2bprofessional/catalog_product_view_type_bundle_option_radio',
			'Sitewards_B2BProfessional_Block_Catalog_Product_View_Type_Bundle_Option_Radio'
		);
		$this->assertBlockAlias(
			'b2bprofessional/catalog_product_view_type_bundle_option_select',
			'Sitewards_B2BProfessional_Block_Catalog_Product_View_Type_Bundle_Option_Select'
		);
	}


	public function testHelperAlias(){
		$this->assertHelperAlias(
			'b2bprofessional',
			'Sitewards_B2BProfessional_Helper_Data'
		);
	}

}