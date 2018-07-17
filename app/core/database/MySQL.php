<?php namespace MyTrait\database;


class MySQL{
    
    protected $connection = [];
    
    public function connect(array $array) {
         
         foreach ($this->fillable as $value) {
             
             $this->value = $array[$value];
             
         }
         
     }    
    
}
