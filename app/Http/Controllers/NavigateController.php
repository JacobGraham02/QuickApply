<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NavigateController extends Controller {

    public function loginPage() {
        return view('login');
    }

    public function registerPage() {
        return view('register');
    }

    public function indexPage() {
        return view('index');
    }
}
