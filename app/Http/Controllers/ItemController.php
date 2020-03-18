<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{
    
    public function index()
    {
        return ['function'=>'index'];
    }
    //
    public function add(Request $request){
        $name = $request->input('name','');
        $content = $request->input('content','');
        $item['name'] = $name;
        $item['content'] = $content;

       
        $result = Item::save($item);
        dump($result);
    }

    public function info(Request $request,$id){
        $info = Item::where('id',$id)->get();
        return $info;
    }
}
