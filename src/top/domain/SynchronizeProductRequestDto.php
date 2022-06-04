<?php

/**
 * The product list, in which the inventory needs to be updated. Maximum 20 products.
 * @author auto create
 */

namespace Skvarovski\TopSdk\domain;

class SynchronizeProductRequestDto
{
	
	/** 
	 * The sku list, in which the inventory needs to be updated within the same product id. Maximum 200 skus.
	 **/
	public $multiple_sku_update_list;
	
	/** 
	 * product id
	 **/
	public $product_id;	
}
?>