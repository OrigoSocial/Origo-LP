<?php

namespace App\Http\Controllers;

use App\Newcomer;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function show()
    {
        $newcomers = Newcomer::orderBy('created_at', 'desc')->paginate(3);

        return view('list', [
            'newcomers' => $newcomers,
            'count'     => Newcomer::count()
        ]);
    }
}
