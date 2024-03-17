<?php

namespace App\Http\Controllers;

use App\Models\MitraModel;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index($username)
    {
        $account = MitraModel::where('username', $username)->first();
        return view('policy', compact('account'));
    }
}
