<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
  public function showContent()
  {
    $memos = Memo::get();
    return view('content', ['memos' => $memos]);
  }

  public function store(Request $request)
  {
    $content = $request->input('content');
    dd($content);
  }
}
