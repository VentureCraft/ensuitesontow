<?php

class HomeController extends BaseController
{

    public function showWelcome()
    {

        if ($old_id = Input::get('amp;franchid')) {
            $franchisee = Franchisee::whereOldId($old_id)->first();
            if ($franchisee) {
                return Redirect::to(route('franchisee.profile',
                    array(
                        $franchisee->slug,
                        $franchisee->id
                    )), 301
                );
            }
        }

        return View::make('hello');
    }

}
