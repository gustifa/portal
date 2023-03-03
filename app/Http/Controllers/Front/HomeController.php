<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;

class HomeController extends Controller
{
    public function home(){
        $PageHomeItem = PageHomeItem::where('id', 1)->first();
        return view('front.layout.app_front', compact('PageHomeItem'));
    }
}
