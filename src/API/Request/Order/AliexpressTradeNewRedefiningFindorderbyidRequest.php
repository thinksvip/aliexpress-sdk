<?php
namespace Aliexpress\API\Request\Order;
use Aliexpress\Object\Order\AeopTpOrderDetailDto;
use Exception;
use JsonMapper;

/**
 * TOP API: aliexpress.trade.new.redefining.findorderbyid request
 * 
 * @author auto create
 * @since 1.0, 2021.07.23
 */
class AliexpressTradeNewRedefiningFindorderbyidRequest
{
	/** 
	 * 详细参考如下
	 **/
	private $param1;
	
	private $apiParas = array();
	
	public function setParam1($param1)
	{
		$this->param1 = $param1;
		$this->apiParas["param1"] = $param1;
	}

	public function getParam1()
	{
		return $this->param1;
	}

	public function getApiMethodName()
	{
		return "aliexpress.trade.new.redefining.findorderbyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}


    /**
     * @param $resp
     * @return AeopTpOrderDetailDto
     * @throws \JsonMapper_Exception
     */
	public function response($resp) : AeopTpOrderDetailDto
    {
        if (isset($resp->target)) return (new JsonMapper())->map($resp->target,new AeopTpOrderDetailDto());
        throw new Exception($resp->sub_msg);
    }
}
