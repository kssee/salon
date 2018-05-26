<?php

namespace App\Http\Controllers\Staff;

use App\Models\Stylist;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CalenderController extends Controller
{
    public function index() {
        $stylists = Stylist::pluck('name','id');
        $from = Input::get('from_date',date('d/m/Y'));
        $to = Input::get('to_date',date('d/m/Y'));

        $from = Carbon::createFromFormat('d/m/Y',$from)->startOfDay();
        $to = Carbon::createFromFormat('d/m/Y',$to)->endOfDay();
        $interval = new \DateInterval('P1D');
        $to->add($interval);
        $date_range = new \DatePeriod($from, $interval ,$to);

        $time_range = [
            '1030'=>'10:30 AM',
            '1100'=>'11:00 AM',
            '1130'=>'11:30 AM',
            '1200'=>'12:00 PM',
            '1230'=>'12:30 PM',
            '1300'=>'1:00 PM',
            '1330'=>'1:30 PM',
            '1400'=>'2:00 PM',
            '1430'=>'2:30 PM',
            '1500'=>'3:00 PM',
            '1530'=>'3:30 PM',
            '1600'=>'4:00 PM',
            '1630'=>'4:30 PM',
            '1700'=>'5:00 PM',
            '1730'=>'5:30 PM',
            '1800'=>'6:00 PM',
            '1830'=>'6:30 PM',
            '1900'=>'7:00 PM',
            '1930'=>'7:30 PM'
        ];

        return view('staff.calender.index',compact('stylists','from','to','date_range','time_range'));
    }
}
