<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Requests;


use App\PartsAuthority\Actions\CheckStockAction;

class CheckStockRequestData extends RequestData {
    /**
     * @var string
     */
    public $line_code;
    
    /**
     * @var string
     */
    public $part_number;
    
    public function isValidPart() {
        $invalidParts = [
            ['line_code' => 'AA', 'part_number' => '11112222']
        ];
        
        foreach ($invalidParts as $invalidPart) {
            if ($invalidPart['line_code'] === $this->line_code && $invalidPart['part_number'] === $this->part_number) {
                return false;
            }
        }
        
        return true;
    }
    
    /**
     * @return CheckStockAction
     */
    public function getAction() {
        return new CheckStockAction($this);
    }
}
