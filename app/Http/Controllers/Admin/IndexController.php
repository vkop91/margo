<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the start page.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }
}
