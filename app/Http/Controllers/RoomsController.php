<?php

namespace App\Http\Controllers;

use App\Room;
use App\Post;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 空のメッセージインスタンスを作成
        $message = new Message();
        
        // フラッシュメッセージにnull をセット
        $flash_message = null;
        // エラーメッセージにnullをセット
        $errors = null;
        
        // 連想配列のデータを3セット（viewで引き出すキーワードと値のセット）引き連れてviewを呼び出す
        return view('messages.create', compact('message', 'flash_message', 'errors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post_id = $request->input('post_id');
        $post = Post::find($post_id);
        $file = $request->image;
        $post->add_room(\Auth::id());
        
        // 画像ファイルが選択されていれば
        if ($file) { 
        
            // 現在時刻ともともとのファイル名を組み合わせてランダムなファイル名作成
            $image = time() . $file->getClientOriginalName();
            // アップロードするフォルダ名取得
            $target_path = public_path('uploads/');

        } else { // ファイルが選択されていなければ
            $image = null;
        }
        
        return redirect('/posts/' . $post_id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $post = $room->post()->get()->first();
        $chats = $room->chats()->get();
        
        
        return view('rooms.show', compact('chats', 'room', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
