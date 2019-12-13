<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


use App\PartsAuthority\Actions\EnterOrderAction;

class EnterOrderRequestData extends RequestData {
    /**
     * @var \App\PartsAuthority\Utils\Request\OrderHeader
     */
    public $orderHeader;
    
    /**
     * @var \App\PartsAuthority\Utils\Request\OrderItem[]
     */
    public $orderItems;
    
    /**
     * @return EnterOrderAction
     */
    public function getAction() {
        return new EnterOrderAction($this);
    }
}
