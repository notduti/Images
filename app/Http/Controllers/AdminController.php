<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

    public function index() {

        $viewData = [];
        $viewData['title'] = 'Pannello admin';
        return view('admin.home.index')->with("viewData", $viewData);
    }
}

?>