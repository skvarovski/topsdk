<?php
/**
 * TOP API: aliexpress.category.redefining.getpostcategorybyid request
 * 
 * @author auto create
 * @since 1.0, 2021.04.29
 */
namespace Skvarovski\TopSdk\request;

class AliexpressCategoryRedefiningGetpostcategorybyidRequest
{
	/** 
	 * 发布类目ID
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "aliexpress.category.redefining.getpostcategorybyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->param0,"param0");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
