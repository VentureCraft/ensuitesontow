<?php

class Testimonialcategory extends Eloquent
{
    protected $guarded = array('id');

    public $timestamps = false;

    public function testimonials()
    {
        return $this->hasMany('Testimonial');
    }
}