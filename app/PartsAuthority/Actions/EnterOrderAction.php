<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Actions;


use App\PartsAuthority\Requests\EnterOrderRequestData;

class EnterOrderAction extends BaseAction {
    
    /**
     * @var EnterOrderRequestData
     */
    public $reqData;
    
    /**
     * @return mixed
     */
    public function handle() {
        return file_get_contents(app_path('PartsAuthority/response/enter_order.json'));
    }
}
