<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


class RequestDataMap {
    public $checkStock = CheckStockRequestData::class;
    
    public $enterOrder = EnterOrderRequestData::class;
    
    public $getOrderInformation = GetOrderInformationRequestData::class;
    
    public $getOrderShippingDetail = GetOrderShippingDetailRequestData::class;
    
    /**
     * @var string
     */
    public $reqData;
    
    public function __construct($reqData) {
        $this->reqData = json_decode($reqData);
    }
    
    public function getClassName() {
        $action = $this->getAction();
        return $this->{$action};
    }
    
    public function getAction() {
        return $this->reqData->action;
    }
}
