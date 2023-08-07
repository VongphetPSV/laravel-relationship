<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function PgUser()
    {
        return view('datatable.datatable-demo');
    }
}
