<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Actions;

use App\PartsAuthority\Requests\CheckStockRequestData;

class CheckStockAction extends BaseAction {
    /**
     * @var CheckStockRequestData
     */
    public $reqData;
    
    /**
     * @return array|mixed
     */
    public function handle() {
        
        if (!$this->reqData->isValidPart()) {
            return [
                "responseDetail" => [
                    "err_description" => "No matching parts found",
                    "linecode"        => $this->reqData->line_code,
                    "partnum"         => $this->reqData->part_number
                ],
                "responseStatus" => "Failed"
            ];
        }
        
        return [
            "responseStatus" => "Success",
            "responseDetail" => [
                "gastock"  => "000000000",
                "houstock" => "000000000",
                "bxstock"  => "000000000",
                "dcstock"  => "000000008",
                "sflstock" => "000000100",
                "sfran"    => $this->reqData->line_code,
                "instock"  => "000000832",
                "dfwstock" => "000000000",
                "castock"  => "000000004",
                "bystock"  => "000000000",
                "nystock"  => "000000000",
                "price"    => "00040.00",
                "core"     => "00010.00",
                "spart"    => $this->reqData->part_number,
                "ohstock"  => "000000000",
                "ncstock"  => "000000000",
                "wastock"  => "000000020",
                "orstock"  => "000000700",
                "azstock"  => "000000000",
                "venstock" => "000000000",
                "frstock"  => "000000000",
                "scstock"  => "000000004"
            ]
        ];
    }
}
