<?php

namespace App\Http\Controllers\Notifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        return view('notifikasi.index');
    }
}
