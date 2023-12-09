<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>買い物リスト管理・韓国料理 @yield('title')</title>

   <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    </head>

    <body>

 @if (session('front._register_success') == true)
                ユーザを登録しました！！<br>
            @endif

        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <div class="login-box">
         <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
         <div class="user-box">
            <input name="email" value="{{ old('email') }}" required>
             <label>Username</label>
              </div>
               <div class="user-box">
            <input  name="password" type="password" required>
             <label>Password</label>
             </div>
            <button>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
        ログインする
        </button><br>
            <a href="/user/register">会員登録</a><br>

        </form>
        </div>
 </body>
</html>