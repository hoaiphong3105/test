<?php
/**
 * Created by PhpStorm.
 * User: LMT
 * Date: 11/22/2016
 * Time: 8:09 AM
*/ 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
 {
    protected $id;
	 public function show($id)
     {

             $dssp = DB::SELECT('SELECT * FROM san_pham sp, loai_san_pham lsp WHERE sp.id_loai = lsp.id_loai AND lsp.id_loai = ?',[$id]);
             return view('Product.index', ['listsp' => $dssp]);

     }

    public function chitiet($id)
    {

        $sp = DB::SELECT('SELECT * FROM san_pham sp  WHERE sp.id_sp = ?',[$id]);
        return view('Product.detail', ['sp' => $sp]);

    }
 }

