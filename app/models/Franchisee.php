<?php

class Franchisee extends Eloquent
{
    protected $guarded = array('id');
    public $timestamps = false;

    public function getSlugAttribute()
    {
        return Str::slug($this->location) . '/' . Str::slug($this->name);
    }
}