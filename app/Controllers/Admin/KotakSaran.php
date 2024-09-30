<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class KotakSaran extends BaseController
{
    public function index()
    {
        return view('admin/kotak_saran/kotak_saran', [
            'listsaran' => view('admin/kotak_saran/listsaran'), 
        ]);
    }
}