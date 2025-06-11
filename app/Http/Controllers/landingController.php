<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    use App\Models\special_menu;

public function beforeLogin()
{
    $special_menus = special_menu::all();
    return view('pages.before-login', compact('special_menus'));
}

public function afterLogin()
{
    $special_menus = special_menu::all();
    return view('pages.after-login', compact('special_menus'));
}

}
