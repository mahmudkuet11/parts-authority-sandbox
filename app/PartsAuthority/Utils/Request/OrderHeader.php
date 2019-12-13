<?php
/**
 * Created by MD. Mahmud Ur Rahman <mahmud@mazegeek.com>.
 */

namespace App\PartsAuthority\Utils\Request;


class OrderHeader {
    /**
     * @var string
     */
    public $cust_name;
    
    /**
     * @var string
     */
    public $order_num;
    
    /**
     * @var ShippingDetails
     */
    public $shipping_details;
    
    /**
     * @var string
     */
    public $ship_add1;
    
    /**
     * @var string
     */
    public $ship_add2;
    
    /**
     * @var string
     */
    public $ship_city;
    
    /**
     * @var string
     */
    public $ship_state;
    
    /**
     * @var string
     */
    public $ship_zip;
    
    /**
     * @var string
     */
    public $ship_country;
    
    /**
     * @var string
     */
    public $ship_meth;
    
    /**
     * @var string
     */
    public $status;
    
    /**
     * OrderHeader constructor.
     *
     * @param string          $cust_name
     * @param string          $order_num
     * @param ShippingDetails $shipping_details
     * @param string          $ship_add1
     * @param string          $ship_add2
     * @param string          $ship_city
     * @param string          $ship_state
     * @param string          $ship_zip
     * @param string          $ship_country
     * @param string          $ship_meth
     * @param string          $status
     */
    public function __construct($cust_name, $order_num, $shipping_details, $ship_add1, $ship_add2, $ship_city, $ship_state, $ship_zip, $ship_country, $ship_meth, $status) {
        $this->cust_name = $cust_name;
        $this->order_num = $order_num;
        $this->shipping_details = $shipping_details;
        $this->ship_add1 = $ship_add1;
        $this->ship_add2 = $ship_add2;
        $this->ship_city = $ship_city;
        $this->ship_state = $ship_state;
        $this->ship_zip = $ship_zip;
        $this->ship_country = $ship_country;
        $this->ship_meth = $ship_meth;
        $this->status = $status;
    }
}
