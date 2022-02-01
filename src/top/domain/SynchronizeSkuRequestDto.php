<?php

/**
 * The sku list, in which the inventory needs to be updated within the same product id. Maximum 200 skus.
 * @author auto create
 */
class SynchronizeSkuRequestDto
{
	
	/** 
	 * inventory
	 **/
	public $inventory;
	
	/** 
	 * sku code
	 **/
	public $sku_code;	
}
?>