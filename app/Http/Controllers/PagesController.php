<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
    return view ('pages.welcome');
  }
  public function getAbout(){
    $first ="Joanne";
    $last ="De Vera";

    $fullname =$first . " " . $last;
    $data =[];
    $data['fullname'] = $fullname;
    return view ('pages.about')->withData($data);
  }
  public function getContact(){
    return view ('pages.contact');
  }

  }
