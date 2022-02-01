<?php

/**
 * 搭配列表
 * @author auto create
 */
class AeopOfferBundle
{
	
	/** 
	 * 搭配ID
	 **/
	public $bundle_id;
	
	/** 
	 * 搭配主商品
	 **/
	public $main_item;
	
	/** 
	 * 搭配排列顺序
	 **/
	public $order;
	
	/** 
	 * 搭配商品列表
	 **/
	public $sub_item_list;
	
	/** 
	 * 搭配中已下架或删除的商品列表
	 **/
	public $tbd_or_trash_item_ids;	
}
?>