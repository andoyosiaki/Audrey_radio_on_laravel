<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laravelradio;

class RadioController extends Controller
{
    public function index()
    {
      $radios = laravelradio::orderBy('id','desc')->paginate(20);
      return view('Radio.index',compact('radios'));
    }

    public function show($id)
    {
      $radios = laravelradio::where(['id' => $id])->get();
      foreach ($radios as $radio) {
        $radio;
      }
        $radioss = laravelradio::all();
        foreach ($radioss as $key) {
          $max =  $key->id;
        }

        return view('Radio.show',compact('radio','max'));
    }
}
