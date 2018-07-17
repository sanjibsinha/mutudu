<?php namespace MyClasses;

use MyTrait\traits\TraitWritingReview as TraitWritingReview;

class UserOne
{
    use TraitWritingReview;
        
    function get($product) {
        echo "The {$product} is delivered to user one.";        
    }
}