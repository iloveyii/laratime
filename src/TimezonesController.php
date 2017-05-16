<?php

namespace Softhem\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        $current_time = $time->toDateTimeString();

        return view('timezones::time', compact('current_time'));
    }
}
