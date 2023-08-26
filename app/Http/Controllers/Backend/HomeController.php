<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $view_path = 'backend.dashboard.';
    protected $base_route = 'backend.dashboard.';

    public function index()
    {
        $data = [];
        return view($this->view_path . 'index',compact('data'));
    }

}
