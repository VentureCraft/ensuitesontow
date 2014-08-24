<?php

class FranchiseeController extends BaseController
{

    public function index()
    {
        return View::make('franchisee.hire');
    }

    public function search()
    {
        return Redirect::to(route('franchisee.profile',array(
            'nevil-langley-adelaide-north',
            1
        )));
    }

    public function profile($slug, $id)
    {

        return View::make('franchisee.profile');

    }

}
 