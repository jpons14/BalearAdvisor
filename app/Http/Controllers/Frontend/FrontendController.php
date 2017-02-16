<?php

namespace App\Http\Controllers\Frontend;

use App\EstablimentModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FrontendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(  )
    {
        $establiment = EstablimentModel::all();
        return view('frontend.index')->with('establiment', $establiment);
    }

    public function comentaris(  )
    {
        return view('frontend.comentaris');
    }

    public function restaurants(  )
    {
        return view('frontend.restaurants');
    }

    public function contacte(  )
    {
        return view('frontend.contact');
    }
}
