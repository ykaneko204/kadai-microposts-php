<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLikeController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->likeon($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->likeoff($id);
        return redirect()->back();
    }
}