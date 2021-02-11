<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drill;

class DrillsController extends Controller
{
    //php7.0からメソット名にnewが使える様になった。
    public function new()
    {
        return view('drills.new');
    }

    public function index(){
        $drills = Drill::all();
        return view('drills.index',['drills' => $drills]);
    }

    public function create(Request $request)
    {
    $request->validate([
    'title' => 'required|string|max:255',
    'problem0' => 'required|string|max:255',
    'problem1' => 'string|nullable|max:255',
    'problem2' => 'string|nullable|max:255',
    'problem3' => 'string|nullable|max:255',
    'problem4' => 'string|nullable|max:255',
    'problem5' => 'string|nullable|max:255',
    'problem6' => 'string|nullable|max:255',
    'problem7' => 'string|nullable|max:255',
    'problem8' => 'string|nullable|max:255',
    'problem9' => 'string|nullable|max:255',
    ]);

      //modelを使って,DBに登録する値をセット。
      //Drillクラスを使ってインスタンス化したい場合もuse App\Drill;
    $drill = new Drill;

      // fillを使って一気に入れるか(fillは$drillを作る際に使ったdrillクラス内にfillメソッドがある為useはいらない)
      //allメソッドは引数の更新をするメソッド
      // $fillableを使っていないと変なデータが入り込んだ場合に勝手にDBが更新されてしまうので注意
      //もしDB接続時に何か問題があった場合は自動で例外処理が入る。
    $drill->fill($request->all())->save();

      // リダイレクトする
      // その時にwithメソッドを使ってsessionフラッシュにメッセージを入れる。
    return redirect('/drills/new')->with('flash_message',__('Registered'));
    }

    public function show($id){
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message',__('Invalid
            operation was performed'));
        }

        $drill = Drill::find($id);
        //第二引数に配列を持たせるとview側に変数を渡せる。
        return view('drills.show',['drill' => $drill]);
    }

    public function edit($id){
        // GETパラメータが数字かどうかをチェックする
        // 事前にチェックしておくことでDBへの無駄なアクセスが減らせる(WEBサーバーへのアクセスの)
        //主キーのバリ取り。引っかかったら第二引数にエラメ'Invalid operation was performed'が代入される。
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message',__('Invalid
            operation was performed'));
        }

        $drill = Drill::find($id);
        //第二引数に配列を持たせるとview側に変数を渡せる。
        return view('drills.edit',['drill' => $drill]);
    }

    public function update(Request $request,$id)
    {
        // GETパラメータが数字かどうかをチェックする
        // 事前にチェックしておくことでDBへの無駄なアクセスが減らせる(WEBサーバーへのアクセスの)
        //主キーのバリ取り。引っかかったら第二引数にエラメ'Invalid operation was performed'が代入される。
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message',__('Invalid
            operation was performed'));
        }

        $drill = Drill::find($id);
        $drill->fill($request->all())->save();

        //リダイレクトする。
        //その時にsessionフラッシュ(一度だけ使えるssesion変数。fuel学習動画にあった)にメッセージを入れる。
        return redirect('/drills/new')->with('flash_message',__('Registered.'));
    }

    public function destroy($id)
    {
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message',__('Invalid
            operation was performed'));
        }

        //モデルファイルにあるDrillclassからfindメソッドを使ってdestroyメソッド実行時に引っ張ってきたIDに沿ってレコードを削除する。
        Drill::find($id)->delete();

        return redirect('/drills')->with('flash_message',__('Deleted'));
    }
}


