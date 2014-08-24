<?php

class FranchiseeController extends BaseController
{

    public function index()
    {
        return View::make('franchisee.hire');
    }

    public function search()
    {
        if ($franchisee = Franchisee::where('postcodes', 'like', '%|'.Input::get('postcode').'|%')->first()) {
            return Redirect::to(route('franchisee.profile',array(
                $franchisee->slug,
                $franchisee->id
            )))->withFlashMessage('No franchisee servicing this area. Here\'s our head office details.');
        }

        // fall back to us
        Notification::info('No franchisee servicing this area. Here\'s our head office details.');
        $franchisee = Franchisee::first();
        return Redirect::to(route('franchisee.profile',array(
            $franchisee->slug,
            $franchisee->id
        )));
    }

    public function profile($location, $name, $id)
    {
        $franchisee = Franchisee::find($id);

        if (!$franchisee) {
            $franchisee = Franchisee::first();
            Notification::info('Franchisee not found, here\'s our head office details');

            return Redirect::to(route('franchisee.profile',
                array(
                    $franchisee->slug,
                    $franchisee->id
                ))
            );
        }

        return View::make('franchisee.profile')
            ->withFranchisee($franchisee);

    }

}
 