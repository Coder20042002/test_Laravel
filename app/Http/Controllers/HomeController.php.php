<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //action
    public function check() {
        return 'check';
    }

    public function getCategory() {
        return 'Category';
    }
}
