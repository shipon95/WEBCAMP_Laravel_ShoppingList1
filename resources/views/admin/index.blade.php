<!DOCTYPE html>
<html lang="ja">

<head>
      <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン機能付きタスク管理サービス 管理画面 @yield('title')</title>
    </head>
    <body>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
            @endif
            <div class="login-box">
         <h2>管理者Login</h2>
         <form action="/admin/login" method="post">
            @csrf
         <div class="user-box">
           <input name="login_id" value="{{ old('login_id') }}" required>
             <label>ログインID</label>
              </div>
               <div class="user-box">
            <input  name="password" type="password" required>
             <label>パスワード</label>
             </div>
            <button class="btn btn-primary mb-3">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
        ログインする
        </button><br>
         </form>
        </div>

 </body>
</html>

