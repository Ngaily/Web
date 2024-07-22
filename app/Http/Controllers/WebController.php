<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('public.homepage');
    }
    public function gioithieu()
    {
        return view('public.gioithieu');
    }
    public function tin()
    {
        return view('public.tin');
    }
    public function chitiet($id = 0)
    {
        $data = ['id' => $id];
        return view('public.chitiet', $data);
    }
    public function dangnhap()
    {
        return view('public.dangnhap');
    }
    public function dangky()
    {
        return view('public.dangky');
    }
    public function quenmk()
    {
        return view('public.quenmk');
    }

    // admin
    public function admin()
    {
        return view('admin.homeadmin');
    }
    // user
    public function listus()
    {
        return view('admin.user.listuser');
    }
    // tin
    public function listtin()
    {
        return view('admin.tin.listtin');
    }
    public function addtin()
    {
        return view('admin.tin.them');
    }
    public function addtin_()
    {
        $data = \App\Models\tintuc::all();
        return view('admin.tin.listtin', ['data' => $data]);
    }
    public function capnhattin()
    {
        return view('admin.tin.sua');
    }
    // Loại tin
    public function listLT()
    {
        return view('admin.LoaiTin.listloaitin');
    }

    public function addLT()
    {
        return view('admin.LoaiTin.them');
    }

    public function capnhatLT()
    {
        return view('admin.LoaiTin.sua');
    }
    // 
    public function layout()
    {
        return view('admin.layout.layout');
    }
}
