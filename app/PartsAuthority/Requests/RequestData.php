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
    
    /**
     * @param $reqDataJson
     *
     * @return RequestData|object
     * @throws \JsonMapper_Exception
     */
    public static function getFromJson($reqDataJson) {
        $reqDataMap = new RequestDataMap($reqDataJson);
        $reqDataClassName = $reqDataMap->getClassName();
        $mapper = new \JsonMapper();
        return $mapper->map($reqDataMap->reqData, new $reqDataClassName);
    }
    
    public function isAuthenticated() {
        $validAccounts = [
            ['accountNum' => '11111', 'userName' => 'test_user', 'userPass' => 'test_password'],
            ['accountNum' => config('services.parts_authority.account_number'), 'userName' => config('services.parts_authority.username'), 'userPass' => config('services.parts_authority.password')],
        ];
        
        foreach ($validAccounts as $validAccount) {
            if (
                $this->accountNum === $validAccount['accountNum'] &&
                $this->userName === $validAccount['userName'] &&
                $this->userPass === $validAccount['userPass']
            ) {
                return true;
            }
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
