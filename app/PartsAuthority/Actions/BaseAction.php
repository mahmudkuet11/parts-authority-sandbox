<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Actions;


use App\PartsAuthority\Requests\RequestData;

abstract class BaseAction {
    
    /**
     * @var RequestData
     */
    public $reqData;
    
    /**
     * BaseAction constructor.
     *
     * @param RequestData $reqData
     */
    public function __construct(RequestData $reqData) {
        $this->reqData = $reqData;
    }
    
    /**
     * @return mixed
     */
    abstract public function handle();
}
