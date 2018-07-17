<?php namespace MyTrait\traits;

trait TraitWritingReview
{
    protected $review = [];
    
    public function post($review)
    {
        $this->write($review);
    }

    private function write($review)
    {
        // express your opinion about the product
        $this->review = $review;
        return $this->review;
    }
}

