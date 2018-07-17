<?php namespace MyClasses;

use MyInterface\iDeliveryParty as iDeliveryParty;
use MyTrait\traits\TraitWritingReview as TraitWritingReview;

class UserTwo implements iDeliveryParty
{
    use TraitWritingReview;
    
    function get($product) {
        echo "The {$product} is delivered to user two \n";        
    }
    
    function post($review) {
        echo "{$review}";
    }
}
