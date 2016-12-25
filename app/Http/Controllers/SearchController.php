<?php
/**
 * Created by PhpStorm.
 * User: LMT
 * Date: 12/5/2016
 * Time: 8:31 PM
 */

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function MultipleCriteria(Request $request)
    {

        $q = $_GET['nhasanxuat'];//nhà sản xuất
        $x = $_GET['loai'];//loại sản phẩm
        $z =(float)$_GET['gia'];//Giá

        if($x=="" and $z=="")
        {
            $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->get();
        }
        elseif ($q=="" and $z=="")
        {
            $product = DB::table('san_pham')->where('id_loai', 'like', $x)->get();
        }
        elseif ($q=="" and $x=="")
        {
            if($z==1)
            {
                $temp=15000000;
                $product = DB::table('san_pham')->where('gia', '>', $temp)->get();
            }
            elseif ($z==2)
            {
                $temp=15000000;
                $temp2=10000000;
                $product = DB::table('san_pham')->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif ($z==3) {
                $temp = 10000000;
                $temp2 = 5000000;
                $product = DB::table('san_pham')->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif($z==4) {
                $temp=5000000;
                $product = DB::table('san_pham')->where('gia', '<', $temp)->get();
            }

        }
        elseif($z=="")
        {
            $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('id_loai', 'like', $x)->get();
        }
        else if($x=="")
        {
            if($z==1)
            {
                $temp=15000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('gia', '>', $temp)->get();
            }
            elseif ($z==2)
            {
                $temp=15000000;
                $temp2=10000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif ($z==3) {
                $temp = 10000000;
                $temp2 = 5000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif($z==4) {
                $temp=5000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('gia', '<', $temp)->get();
            }
        }
        elseif($q=="")
        {
            if($z==1)
            {
                $temp=15000000;
                $product = DB::table('san_pham')->where('id_loai', 'like', $x)->where('gia', '>', $temp)->get();
            }
            elseif ($z==2)
            {
                $temp=15000000;
                $temp2=10000000;
                $product = DB::table('san_pham')->where('id_loai', 'like', $x)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif ($z==3) {
                $temp = 10000000;
                $temp2 = 5000000;
                $product = DB::table('san_pham')->where('id_loai', 'like', $x)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif($z==4) {
                $temp=5000000;
                $product = DB::table('san_pham')->where('id_loai', 'like', $x)->where('gia', '<', $temp)->get();
            }
        }
        else
        {
            if($z==1)
            {
                $temp=15000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('id_loai', 'like', $x)->where('gia', '>', $temp)->get();
            }
            elseif ($z==2)
            {
                $temp=15000000;
                $temp2=10000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('id_loai', 'like', $x)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif ($z==3) {
                $temp = 10000000;
                $temp2 = 5000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('id_loai', 'like', $x)->where('gia', '<', $temp)->where('gia', '>=', $temp2)->get();
            }
            elseif($z==4) {
                $temp=5000000;
                $product = DB::table('san_pham')->where('nha_sx', 'like', $q)->where('id_loai', 'like', $x)->where('gia', '<', $temp)->get();
            }

        }
        return view('Search.index', ['listsp' => $product]);
    }
    public function Name(Request $request)
    {
        $q = $request->input('key');
        $product = DB::table('san_pham')-> where('ten_sp','like','%'.$q.'%')->get();
        return view ('Search.index',['listsp'=>$product]);
    }
}


