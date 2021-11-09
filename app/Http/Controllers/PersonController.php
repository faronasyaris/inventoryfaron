<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $name = "Faron";
    private $code = '190313010';


    public function index() {
        return view('person.index');
    }

    public function show($param){
        $this->name = $param;
        return $this->name;
    }
    
    public function sendData(){
        $code = $this ->code;
        $name = $this ->name;
        return view ("person.sendData", compact('code', 'name'));
    }
}
