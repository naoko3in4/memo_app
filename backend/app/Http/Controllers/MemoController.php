<?php

namespace App\Http\Controllers;

use App\Models\Memo;

class MemoController extends Controller
{
  public function showContent()
  {
    $memos = Memo::get();
    return view('content', ['memos' => $memos]);
  }
}
