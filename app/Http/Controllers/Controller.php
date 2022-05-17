<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use DateTime;

class Controller extends BaseController
{
    
    public function validateResults(Request $request){

        $currentDate = new DateTime();
        $date_of_birth = strtotime($request->date_of_birth);
        $overEighteen = strtotime('+18 years', $date_of_birth);
        
        if($currentDate->getTimestamp() < $overEighteen){
            return view('results', [
                'verified' => false,
            ]);
        } 

        
        $cohort = 'A';
        $timesPerDay = Null;
        if($request->frequency == 'Daily'){
            $cohort = 'B';
            $timesPerDay = $request->daily;
        }


        \DB::insert('insert into participants (name, cohort, date_of_birth, frequency, times_per_day) values (?,?,?,?,?)', 
                    [$request->first_name, $cohort, $request->date_of_birth, $request->frequency, $timesPerDay]);


        return view('results', [
            'verified'  => true,
            'name'      => $request->first_name,
            'cohort'    => $cohort,

        ]);
    }
}
