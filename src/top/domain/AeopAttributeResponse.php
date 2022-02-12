<?php

/**
 * 发布属性
 * @author auto create
 */
namespace Skvarovski\TopSdk\domain;

class AeopAttributeResponse
{
	
	/** 
	 * 发布属性list
	 **/
	public $attributes;
	
	/** 
	 * errorCode
	 **/
	public $error_code;
	
	/** 
	 * errorMessage
	 **/
	public $error_message;
	
	/** 
	 * 服务调用是否成功
	 **/
	public $success;	
}
?>