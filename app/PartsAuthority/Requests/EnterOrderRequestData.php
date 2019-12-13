<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


use App\PartsAuthority\Utils\Request\OrderHeader;
use App\PartsAuthority\Utils\Request\OrderItem;

class EnterOrderRequestData extends RequestData {
    /**
     * @var OrderHeader
     */
    public $orderHeader;
    
    /**
     * @var OrderItem[]
     */
    public $orderItems;
}
