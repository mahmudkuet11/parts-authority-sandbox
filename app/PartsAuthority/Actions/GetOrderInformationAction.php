<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Actions;


use App\PartsAuthority\Requests\GetOrderInformationRequestData;
use App\PartsAuthority\Utils\JSONResponse;

class GetOrderInformationAction extends BaseAction {
    
    /**
     * @var GetOrderInformationRequestData
     */
    public $reqData;
    
    /**
     * @return mixed
     */
    public function handle() {
        $shippedOrders = ['PC1-test-999999999'];
        $entryPendingOrders = ['PC1-test-999999998'];
        
        if(array_search($this->reqData->PoNumber, $shippedOrders) !== false){
            return $this->getShippedOrderResponse();
        }
    
        if(array_search($this->reqData->PoNumber, $entryPendingOrders) !== false){
            return $this->getEntryPendingOrderResponse();
        }
    
        return $this->getEntryPendingOrderResponse();
    }
    
    private function getShippedOrderResponse() {
        return JSONResponse::get('shipped_order.json');
    }
    
    private function getEntryPendingOrderResponse() {
        return JSONResponse::get('entry_pending_order.json');
    }
}
