<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;

use App\PartsAuthority\Actions\BaseAction;

abstract class RequestData {
    /**
     * @var string
     */
    public $accountNum;
    
    /**
     * @var string
     */
    public $client;
    
    /**
     * @var string
     */
    public $userName;
    
    /**
     * @var string
     */
    public $userPass;
    
    /**
     * @var string
     */
    public $action;
    
    public static function getFromJson($reqDataJson) {
        $reqDataMap = new RequestDataMap($reqDataJson);
        $reqDataClassName = $reqDataMap->getClassName();
        $mapper = new \JsonMapper();
        /* @var $reqData RequestData */
        return $mapper->map((object)$reqDataMap->reqData, new $reqDataClassName);
    }
    
    public function isAuthenticated() {
        if (
            $this->accountNum === "11111" &&
            $this->userName === "test_user" &&
            $this->userPass === "test_password"
        ) {
            return true;
        }
        
        return false;
    }
    
    public function handleAction() {
        return $this->getAction()->handle();
    }
    
    /**
     * @return BaseAction
     */
    abstract public function getAction();
}
