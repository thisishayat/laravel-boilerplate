<?php
/**
 * Created by PhpStorm.
 * User: backend
 * Date: 5/30/18
 * Time: 1:12 PM
 */

namespace App\Http\Controllers;


use App\Country;
use Illuminate\Http\Request;

class ApiController
{
    public function countryList(Request $request)
    {
        $tempLogin = new Country();
        $get = $tempLogin->get()->toArray();
        $res = [
            'status'=>trans('custom.status.success'),
            'msg'=>trans('custom.msg.dataSuccess'),
            'data' => $get,
        ];
        return response()->json($res,trans('custom.status.success'));
    }

}