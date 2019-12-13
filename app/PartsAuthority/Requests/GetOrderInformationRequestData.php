<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


use App\PartsAuthority\Actions\GetOrderInformationAction;

class GetOrderInformationRequestData extends RequestData {
    
    /**
     * @var string
     */
    public $PoNumber;
    
    /**
     * @return GetOrderInformationAction
     */
    public function getAction() {
        return new GetOrderInformationAction($this);
    }
}
