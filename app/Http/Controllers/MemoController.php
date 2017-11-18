<?php

namespace App\Http\Controllers;

use App\Memo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::get();
        return view('welcome')->with('memos',$memos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passkey = Hash::make($request->passkey);
        $body = Crypt::encryptString($request->message);
        $memo = new Memo;
        $memo->title = $request->title;
        $memo->message = $body;
        $memo->passkey = $passkey;
        // $memo->user_id = $request->user_id;
        $memo->user_id = 1;
        $memo->save();

        return $memo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memo = Memo::findOrFail($id);
        return view('passkey')->with('memo', $memo);
        // return "Hello";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }

    /**
     * Retrive a decrypted resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function decryptMessage(Request $request){
        $message = "";
        $memo = Memo::findOrFail($request->id);
        if(Hash::check($request->passkey, $memo->passkey)){
            $message = Crypt::decryptString($memo->message);
        }
        $m = array(
            "title" => $memo->title,
            "message" => $message
        );

        return view('read')->with('memo', $m);
        
    }
}
