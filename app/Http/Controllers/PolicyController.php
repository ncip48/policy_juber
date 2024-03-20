<?php

namespace App\Http\Controllers;

use App\Models\MitraModel;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index($username = "dev")
    {
        $account = MitraModel::where('username', $username)->first();
        if (!$account) {
            return abort(404);
        }

        return view('policy', compact('account'));
    }

    public function tnc()
    {
        return view('tnc');
    }
}
