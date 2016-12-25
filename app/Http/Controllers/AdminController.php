<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 protected $id;
    public function index()
    {
        //
		$dssp = DB::SELECT('SELECT * FROM san_pham sp');
        return view('Admin.index', ['listsp' => $dssp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$ten  = $request->input('ten');
		$loai  = $request->input('loai');
		$gia  = $request->input('gia');
		$sl  = $request->input('soluong');
		$mota  = $request->input('mota');
		$hinhanh  = $request->input('hinhanh');
		$nsx  = $request->input('nsx');
		$tinhtrang  = $request->input('tinhtrang');
		DB::insert('insert into san_pham(ten_sp,id_loai,gia,so_luong,mo_ta,hinh_anh,nha_sx,tinh_trang) values (?,?,?,?,?,?,?,?)', [$ten,$loai,$gia,$sl,$mota,$hinhanh,$nsx,$tinhtrang]);
		
		//DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
		$sp = DB::SELECT('SELECT * FROM san_pham sp  WHERE sp.ten_sp = ?',[$ten]);
        return view('Product.detail', ['sp' => $sp]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
        //$deleted = DB::delete('delete from users');
		$deleted = DB::delete('delete from users where id = ?',[$id]);
		return view("Admin.index");
    }
}
