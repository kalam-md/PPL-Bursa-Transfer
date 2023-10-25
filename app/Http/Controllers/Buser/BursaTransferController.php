<?php

namespace App\Http\Controllers\Buser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BursaTransferController extends Controller
{
    public function index()
    {
        return view('buser.index');
    }
}
