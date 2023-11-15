<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $data = [];

        if (request()->has('search')) {
            $query = request('search');
        }
        return view('home.index', [
            'data' => $data
        ]);
    }
}
