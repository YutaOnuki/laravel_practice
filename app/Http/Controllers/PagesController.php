<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
      return view('pages.contact');
    }
    public function about()
    {
      //$date = [];
      //$date["first_name"] = "Luke";
      //$date["last_name"] = "Skywalker";
      //return view('pages.about', $date);
      //→compactを使った書き方に変更
      $first_name = "Luke";
      $last_name = "Skywalker";
      return view('pages.about', compact('first_name', 'last_name'));
      // (3)のコード return view('pages.about');
    }
}
