<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;



class FrontPanelPages extends Controller
{
    public function landingPage(){
        // Max 6 cars
        $data['cars'] = Array(
            [
                'new'=>true,
                'image'=>'test.jpg',
                'producer'=>'Volkswagen',
                'model'=>'Tiguan',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>45800
            ],
            [
                'new'=>false,
                'image'=>'test.jpg',
                'producer'=>'Jaguar',
                'model'=>'GX 490i',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>30480
            ],
            [
                'new'=>false,
                'image'=>'test.jpg',
                'producer'=>'Jaguar2',
                'model'=>'GX 490i',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>30480
            ],
            [
                'new'=>false,
                'image'=>'test.jpg',
                'producer'=>'Jaguar2',
                'model'=>'GX 490i',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>30480
            ],
            [
                'new'=>false,
                'image'=>'test.jpg',
                'producer'=>'Jaguar2',
                'model'=>'GX 490i',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>30480
            ],
            [
                'new'=>true,
                'image'=>'test.jpg',
                'producer'=>'Jaguar2',
                'model'=>'GX 490i',
                'km'=>35000,
                'an'=>2019,
                'trasmisie'=>'Manual',
                'combustibil'=>'Petrol',
                'putere'=>160,
                'pret'=>30480
            ]
        );

        $data['phone'] = Settings::where('key','contact_phone')->first('value');
        return view('frontPanel.landingPage')->with('data', $data);
    }

    public function ContactPage(){
        return view('frontPanel.Contact')->with('data', '');
    }

    public function DespreNoi(){
        $data['phone'] = Settings::where('key','contact_phone')->first('value');
        return view('frontPanel.Despre-noi')->with('data', $data);
    }

    public function SellCarsPage(){
        return view('frontPanel.sellCars')->with('data','');
    }
}
