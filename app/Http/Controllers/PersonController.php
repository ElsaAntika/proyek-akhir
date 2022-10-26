<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $nrp = "201014014";
    private $name = "Elsa Antika";

    public function index() {
        return  view('person.index');
    }

    public function sendData() {
        $nrp = $this->nrp;
        $name = $this->name;

        return  view("person.sendData", compact('nrp','name'));
        
    }
    public function show($param) {
        $this->name = $param;
        return $this->name;
    }
}
