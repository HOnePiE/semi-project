<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class draftControler extends Controller
{
    //
    public $data=[];
    public function show(){
       
        $this->data['name']='TUan';
        return view('draft', $this->data);
        
    }
}
