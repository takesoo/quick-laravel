<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ViewController extends Controller
{
  public function escape()
  {
    return view('view.escape', [
      'msg' => '<img src="https://wings.msn.to/image/wings.jpg" tilte="ロゴ" />
        <p>WINGSへようこそ</p>'
    ]);
  }

  public function if()
  {
    return view('view.if', [
      'random' => random_int(0, 100)
    ]);
  }

  public function isset()
  {
    return view('view.isset', [
      'msg' => 'あります！',
      'record' => ''
    ]);
  }

  public function foreach_assoc()
  {
    return view('view.foreach_assoc', [
      'member' => [
        'name' => 'YAMADA, Yoshihiro',
        'sex' => 'mail',
        'birth' => '1923-11-10'
      ]
    ]);
  }

  public function foreach_loop()
  {
    return view('view.foreach_loop', [
      'weeks' => ['月','火','水','木','金','土','日']
    ]);
  }

  public function master()
  {
    return view('view.master', [
      'msg' => 'おやすみ、世界'
    ]);
  }

  public function comp()
  {
    return view('view.comp');
  }

  public function list()
  {
    $data = [
      'records' => Book::all()
    ];
    return view('view.list', $data);
  }
}

