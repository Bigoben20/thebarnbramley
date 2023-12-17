<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        $comments = [
            ['id' => 1, 'name' => 'İsim 1', 'content' => 'Yorum 1'],
            ['id' => 2, 'name' => 'İsim 2', 'content' => 'Yorum 2'],
            ['id' => 3, 'name' => 'İsim 3', 'content' => 'Yorum 3'],
            ['id' => 4, 'name' => 'İsim 4', 'content' => 'Yorum 4'],
            ['id' => 5, 'name' => 'İsim 5', 'content' => 'Yorum 5'],
            ['id' => 6, 'name' => 'İsim 6', 'content' => 'Yorum 6'],
        ];
        return view('welcome',compact('comments'));
    }
}
