<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Utils\Request;


class OrderItem {
    /**
     * @var string
     */
    public $line_code;
    
    /**
     * @var string
     */
    public $part_num;
    
    /**
     * @var int
     */
    public $quantity;
    
    /**
     * OrderItem constructor.
     *
     * @param string $line_code
     * @param string $part_num
     * @param int    $quantity
     */
    public function __construct($line_code, $part_num, $quantity) {
        $this->line_code = $line_code;
        $this->part_num = $part_num;
        $this->quantity = $quantity;
    }
}
