<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        function getParam($key, $pattern, $error)
        {
            //$_POST['foo']の代わり。配列チェック
            $val = filter_input(INPUT_POST, $key);
            //文字エンコーディング(UTF-8)のチェック
            if (!mb_check_encoding($val, 'UTF-8')) {
                die('文字エンコーディングが不正です');
            }
            //正規表現とのチェック
            if (preg_match($pattern, $val) !== 1) {
                die($error);
            }
            return $val;
        }


        $id = $request->input('id');
        $userid = getParam($id, '/\A[[[:^cntrl:]][0-9]\z/', '選択されたデータを読み取れませんでした。');
        $detail = post::find(htmlspecialchars($id, ENT_COMPAT, "UTF-8"));

        if ($detail) {
            return view('welcome', compact($detail));
        } else {
            die('選択されたデータを読み取れませんでした。');
        }
    }
}
