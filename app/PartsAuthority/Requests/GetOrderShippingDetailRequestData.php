<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


use App\PartsAuthority\Actions\BaseAction;
use App\PartsAuthority\Actions\GetOrderShippingDetailAction;

class GetOrderShippingDetailRequestData extends RequestData {
    
    /**
     * @var string
     */
    public $PoNumber;
    
    /**
     * @return BaseAction
     */
    public function getAction() {
        return new GetOrderShippingDetailAction($this);
    }
}
