<?php namespace MyTrait\traits;

trait TraitViews
{
	protected $views = [];
        
	public function __get($view)
	{
		if (method_exists($this, ($method = 'get_'.$view)))
		{
			return $this->$method();
		}
		else return;
	}
	
	public function __set($view, $value)
	{
		if (method_exists($this, ($method = 'set_'.$view)))
		{
			$this->$method($value);
		}
	}
	
}