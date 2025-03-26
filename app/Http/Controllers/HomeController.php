<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Post;
use App\Models\SetTime;
use App\Models\Holiday;
use App\Models\Headnote;
use App\Models\Visit;
use App\Models\Webseting;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\HasSEO;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $note = array();//宣告
        $ptime = array();//宣告
        $holidayAry = array();//宣告
        $pReserve = array();//宣告

        $startDate = now()->subDays(7);//獲取前7天
        $data = ['ip' => $request->ip(),];
        Visit::create($data);
        $note = Headnote::pluck('note')->toArray();
        $time_range = SetTime::selectRaw('*, CONCAT(start_time, "-", end_time) AS time')->get()->toArray();
//        $Holiday = Holiday::selectRaw('*, JSON_UNQUOTE(time_point) AS time_ranges')->get()->toArray();
        $count_time = count($time_range);
        $Reserve = Calendar::where('date', '>=', $startDate)->pluck('date')->toArray();
        $holidayNames = Holiday::where('date', '>=', $startDate)->pluck('time_point', 'date')
            ->toArray();
//        $holiday = Holiday::pluck('date')->toArray();
//        $holiday = array_keys($holidayNames);
        $holidayArray = $holidayNames;


        $Calendar_Reserve = Calendar::where('date', '>=', $startDate)->selectRaw('*, REPLACE(CONCAT(REPLACE(date, "-", ""),REPLACE(time, ":", "")), "-", "") AS did')
//            ->whereNotIn('date', $holiday)
            ->get()
            ->toArray();
        $ptime = $this->reKey($time_range, 'id');

        $pPost = $this->reKey(
            Post::selectRaw('*')
                ->orderBy('orderby', 'asc')
                ->where('status', 1)
                ->get()
                ->toArray(),
            'id'
        );
        $HA = array();
        $holidayAry = array();
        foreach ($holidayArray as $date => $timeRanges) {
//            \gl::debug($timeRanges);
//            if (count($timeRanges) !== $count_time) {
            foreach ($timeRanges as $tk => $t) {
                $did = str_replace(['-', ':'], '', $date . $t);
                $HA[] = ['text' => '-', 'bcolor' => '#777888', 'tcolor' => '#777888', 'did' => $did];
            }
//            } else
            if (!in_array($date, $Reserve)) {

                $holidayAry[$date] = $timeRanges;
            }
        }
//        \gl::debug($holidayAry);
        $pReserve_mag = array_merge($HA, $Calendar_Reserve);
        $pReserve = $this->reKey($pReserve_mag, 'did');
        $webseting = Webseting::find(1);

        if ($_GET['y']??'0'==1){
        \gl::debug($webseting);
        }
//        $webseting->seo->update([
//            'title' => 'My great post',
//            'description' => 'This great post will enhance your live.',
//        ]);

//        \gl::debug($pReserve);
//        \gl::debug($note);
//        \gl::debug($Reserve);

        return response()
            ->view('font.Home', compact('pReserve', 'ptime', 'pPost', 'holidayAry', 'count_time', 'note', 'webseting'))
            ->header('X-Robots-Tag', 'index,follow');

    }

}
