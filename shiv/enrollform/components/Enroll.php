<?php namespace Shiv\EnrollForm\Components;

use Cms\Classes\ComponentBase;
use Shiv\EnrollForm\Models\Subscriber;

class Enroll extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Enroll Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onEnrollForm()
    {
        $first_name         =   post('first_name');
        $last_name          =   post('last_name');
        $phone              =   post('phone');
        $email              =   post('email');
        $interested_in      =   post('interested_in');
        $is_subscriber      =   (post('is_subscriber') ? true : false);

        $member = new Subscriber;
        $member->first_name     = $first_name;
        $member->last_name      = $last_name;
        $member->phone          = $phone;
        $member->email          = $email;
        $member->interested_in  = $interested_in;
        $member->is_subscriber  = $is_subscriber;
        $member->save();        
    }    
}
