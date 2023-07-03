<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $arr = array();
        $users = collect([['name' => 'John Doe', 'email' => "johndoe@example.com"], ['name' => 'Zoe', 'email' => "zoe@example.com"]]);
        // $filter = $users->filter(function ($value, $key) {
        //     //dd($key, $value);
        //     if ($value['email'] == "oe@example.com") {
        //         return true;
        //     }
        // });
        $users->each(function ($item, $key) {
            echo $item['name'] . '<br>';
        });



        return view('testing');
    }
}
