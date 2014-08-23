<?php
class ContentController extends BaseController
{

    public function benefits()
    {
        return View::make('content.benefits');
    }

    public function alliances()
    {
        return View::make('content.alliances');
    }
}
