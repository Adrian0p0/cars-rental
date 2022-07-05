<?php

namespace App\View\Components;

use App\Models\Setting;
use App\Models\Settings;
use Illuminate\View\Component;

class frontFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $contact = Settings::
        where('key','contact_mail')
        ->orWhere('key','contact_hours')
        ->orWhere('key','contact_location')
        ->orWhere('key','contact_phone')
        ->get('value');
        return view('components.front-footer')->with('footer_data',$contact);
    }
}
