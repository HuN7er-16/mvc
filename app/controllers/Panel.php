<?php

namespace App\Controllers;

class Panel extends Controller{

    public function index(){

        return $this->view("admin.index");

    }

}
