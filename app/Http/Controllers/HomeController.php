<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Disease;
use App\Indication;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $indications = Indication::all();
        return view('home', compact('user','indications'));
    }

    public function store(Request $request)
    {
        $diseases = [];
        $userIndications = $request->input('indications');
        foreach($userIndications as $userIndication){
            $tempDiseases = Indication::find($userIndication)->diseases;
            foreach($tempDiseases as $dis){
                if(array_has($diseases, $dis->id)){
                    $diseases[$dis->id] = $diseases[$dis->id] + $dis->pivot->cf_score;
                } else {
                    $diseases[$dis->id] = $dis->pivot->cf_score;
                }
            }
        }
        return $diseases;
    }
}
