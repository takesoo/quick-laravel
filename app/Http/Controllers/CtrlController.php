<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは、世間！', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg'=>'こんにちは、世の中！'], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function outJson()
    {
        return response()
            ->json([
                'name' => 'Yoshihiro, YAMADA',
                'sex' => 'male',
                'age' => 18
            ]);
    }

    public function outFile()
    {
        return response()
            ->download('/var/www/quick-laravel/README.md', 'download.md');
    }

    public function outCsv()
    {
        return response()
            ->streamDownload(function(){
                print(
                    "1,2019/10/1,111\n".
                    "2,2019/10/2,222\n".
                    "3,2019/10/3,333\n".
                    "4,2019/10/4,444\n".
                    "5,2019/10/5,555\n"
                );
            }, 'download.csv', ['content-type' => 'text/csv']);
    }

    public function index(Request $req)
    {
        return 'リクエストパス : '.$req->path();
    }

    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $req)
    {
        $name = $req->name;
        return view('ctrl.form', [
            'result' => 'こんにちは、'.$name.'さん'
        ]);
    }

    public function upload()
    {
        return view('ctrl.upload', ['result'=>'']);
    }

    public function uploadfile(Request $req)
    {
        if (!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }
        $file = $req->upfile;
        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }
        $name = $file->getClientOriginalName();
        $file->storeAs('files', $name);
        return view('ctrl.upload', [
            'result' => $name.'アップロードしました。'
        ]);
    }
}

