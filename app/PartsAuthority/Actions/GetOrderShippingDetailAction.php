<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Actions;


use App\PartsAuthority\Requests\GetOrderShippingDetailRequestData;
use App\PartsAuthority\Utils\JSONResponse;

class GetOrderShippingDetailAction extends BaseAction {
    
    /**
     * @var GetOrderShippingDetailRequestData
     */
    public $reqData;
    
    public function handle() {
        $shippedOrders = ['PC1-test-999999999'];
        $entryPendingOrders = ['PC1-test-999999998'];
    
        $invalidPos = ['invalid_po'];
        if (array_search($this->reqData->PoNumber, $invalidPos) !== false) {
            return [
                "responseDetail" => "Invalid PO",
                "responseStatus" => "Failed"
            ];
        }
        
        if(array_search($this->reqData->PoNumber, $shippedOrders) !== false){
            return $this->getShippedOrderResponse();
        }
        
        if(array_search($this->reqData->PoNumber, $entryPendingOrders) !== false){
            return $this->getEntryPendingOrderResponse();
        }
        
        return $this->getEntryPendingOrderResponse();
    }
    
    private function getShippedOrderResponse() {
        return JSONResponse::get('shipped_order_shipping_detail.json');
    }
    
    private function getEntryPendingOrderResponse() {
        return JSONResponse::get('entry_pending_order_shipping_detail.json');
    }
}
