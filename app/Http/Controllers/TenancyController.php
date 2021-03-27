<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenancy;

class TenancyController extends Controller
{
    public function list()
    {
    	$tenancies=Tenancy::all();

    	return view('tenancy.list', compact('tenancies'));
    }
}
