<?php namespace App\home;

use MyTrait\traits\TraitExample as TraitExample;
use MyTrait\traits\TraitViews as TraitViews;

class Home
{
    use TraitViews;
    //use TraitExample;
    public function __construct($view) {
        $this->views['index.view.php'] = $view;                
    }    
      
    public function get_views(){
        return $this->views['index.view.php'];        
    }
    
    public function set_views($value) {
        $this->views['index.view.php'] = $value;        
    }
    
}

