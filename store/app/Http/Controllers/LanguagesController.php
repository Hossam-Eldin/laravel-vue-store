<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function messages(Request $request)
    {
      $data = [
        'welcome' => trans('messages.welcome'),
        'cate'    => trans('messages.cate'),
        'prices'  => trans('messages.prices'),
        'search'  => trans('messages.search'),
        'products'=> trans('messages.products'),
        'next_page'=> trans('messages.next_page'),
        'pre_page' => trans('messages.pre_page'),
        'first_page'=> trans('messages.first_page'),
        'last_page' => trans('messages.last_page')
      ];
      return response()->json($data, 200);
    }
}
