<?php namespace MyClasses;

use MyInterface\iDeliveryParty as iDeliveryParty;

class SellingApp
{
    protected $product;
    protected $user;
    function __construct() {
        
    }
    //function sell(UserOne $user) {
    function sell(iDeliveryParty $user) {
        $this->product = "Potato";
        $this->user = $user;
        return $this->user->get($this->product);        
    }
}


