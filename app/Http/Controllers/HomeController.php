<?php

// namespace (名前空間) : packageみたいなもの
namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// プログラムの読み込み : importみたいなもの
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    function about() {
        return view('about');
    }

    function search(Request $request) {
    // dd($request);
    // $keyword = $request->q;
    // $message = "キーワードは{$keyword}です";
    // return $message;
    
    // 連想配列データ
    $date = [
        "keyword" => $request->q
    ];
    // view ファイルにデータを渡す
    return view("search", $date);
        
    }
}
