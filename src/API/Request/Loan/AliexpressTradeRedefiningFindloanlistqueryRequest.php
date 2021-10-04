<?php

namespace Aliexpress\API\Request\Loan;

use Aliexpress\Object\Loan\FundLoanListVo;
use Exception;
use JsonMapper;

class AliexpressTradeRedefiningFindloanlistqueryRequest
{
    /**
     * 入参
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
        return "aliexpress.trade.redefining.findloanlistquery";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    /**
     * @param $resp
     * @return FundLoanListVo
     * @throws \JsonMapper_Exception
     */
    public function response($resp): FundLoanListVo
    {
        if (isset($resp->result)) return (new JsonMapper())->map($resp->result, new FundLoanListVo());
        throw new Exception($resp->sub_msg);
    }
}