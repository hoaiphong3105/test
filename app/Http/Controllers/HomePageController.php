<?php
/**
 * Created by PhpStorm.
 * User: LMT
 * Date: 12/5/2016
 * Time: 8:36 PM
 */

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function shownew()
    {
        $dsnew = DB::SELECT('SELECT * FROM san_pham sp WHERE sp.tinh_trang = ?',[2]);
        return view('Home.index', ['listnew' => $dsnew]);
    }

}