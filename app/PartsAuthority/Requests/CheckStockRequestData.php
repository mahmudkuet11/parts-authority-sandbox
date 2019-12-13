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
        $validParts = [
            ['line_code' => 'AA', 'part_number' => '11112222']
        ];
        
        foreach ($validParts as $validPart) {
            if ($validPart['line_code'] === $this->line_code && $validPart['part_number'] === $this->part_number) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * @return CheckStockAction
     */
    public function getAction() {
        return new CheckStockAction($this);
    }
}
