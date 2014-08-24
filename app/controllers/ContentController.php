<?php
class ContentController extends BaseController
{

    public function aboutUs()
    {
        return View::make('content.about-us');
    }

    public function alliances()
    {
        return View::make('content.alliances');
    }

    public function benefits()
    {
        return View::make('content.benefits');
    }

    public function builders()
    {
        return View::make('content.builders');
    }

    public function events()
    {
        return View::make('content.events');
    }

    public function features()
    {
        return View::make('content.features');
    }

    public function franchise()
    {
        return View::make('content.franchise');
    }

    public function gallery()
    {
        return View::make('content.gallery');
    }

    public function hireService()
    {
        return View::make('content.hire-service');
    }

    public function installation()
    {
        return View::make('content.installation');
    }

    public function outdoorWeddings()
    {
        return View::make('content.outdoor-weddings');
    }

    public function privacy()
    {
        return View::make('content.privacy');
    }

    public function showers()
    {
        return View::make('content.showers');
    }

    public function testimonials()
    {
        $categories = Testimonialcategory::all();

        return View::make('content.testimonials')
            ->withCategories($categories);
    }

    public function toilets()
    {
        return View::make('content.toilets');
    }

    public function weddings()
    {
        return View::make('content.weddings');
    }
}
