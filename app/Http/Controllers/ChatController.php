<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class ChatController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }
    public function ask(Request $request)
    {
        $userMessage = $request->input('message');
        // これまでの会話をセッションから取得
        $conversation = Session::get('conversation', []);
        // ユーザーのメッセージを会話に追加
        $conversation[] = $userMessage;
        // コンテキストとしてプロンプトを作成
        $prompt = implode(" ", $conversation);
        $response = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'max_tokens' => 150
        ]);
        // Botの応答を会話に追加
        $conversation[] = $response['choices'][0]['text'];
        // 更新された会話をセッションに保存
        Session::put('conversation', $conversation);
        return response()->json($response['choices'][0]['text']);
        }
}