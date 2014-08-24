<?php

class Testimonial extends Eloquent
{
    protected $guarded = array('id');

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('Testimonialcategory');
    }
}