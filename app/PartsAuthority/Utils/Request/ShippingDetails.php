<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Utils\Request;


class ShippingDetails {
    /**
     * @var string
     */
    public $company;
    
    /**
     * @var string
     */
    public $phone;
    
    /**
     * @var string
     */
    public $phone_ext;
    
    /**
     * @var string
     */
    public $residential;
    
    /**
     * ShippingDetails constructor.
     *
     * @param string $company
     * @param string $phone
     * @param string $phone_ext
     * @param string $residential
     */
    public function __construct($company, $phone, $phone_ext, $residential) {
        $this->company = $company;
        $this->phone = $phone;
        $this->phone_ext = $phone_ext;
        $this->residential = $residential;
    }
}
