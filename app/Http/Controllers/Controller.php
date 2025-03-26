<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function reKey($ary = array(), $ks = NULL)
    {
        $ary = is_array($ary) ? $ary : array();
        $newAry = array();
        foreach ($ary as $k => $d) {
            if (@$d[$ks] || @$d[$ks] == 0)
                $newAry[$d[$ks]] = $d;
        }
        return $newAry;
    }
}
