<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        
    }

    //hien thi danh sach chuyen muc
    public function index() {
        return view('client/categories/list');
    }

    //Lay ra 1 danh muc theo id (phuong thuc get)
    public function getCategory($id) {
        return view('client/categories/edit');
    }

    //sua mot chuyen muc (phuong thuc post)
    public function updateCategory() {
        return view('client/categories/add');
    }
}
