<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;    //追加(Modelの一覧取得のために名前空間を変更)

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        // メッセージ一覧を取得
        $messages = Message::all();

        // メッセージ一覧ビューでそれを表示
        return view('messages.index', [
            'messages' => $messages,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $message = new Message;
        //メッセージ作成ビューを表示
        return view('messages.create', [
            'message' => $message,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        //メッセージを作成
        $message = new Message;
        $message->content = $request->content;
        $message->save();
        
        //トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //getでmessages/(任意のid)にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //getでmesssages/(任意のid)/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //putまたはpatchでmessages/(任意のid)にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //deleteでmessages/(任意のid)にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        //
    }
}
