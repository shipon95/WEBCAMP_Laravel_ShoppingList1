<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatbot Interface</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Chatbot button -->
    <div class="chatbot-button">
        <button id="openChatbot">チャットボットを使う</button>
    </div>

    <!-- Chatbot window -->
    <div class="chatbot-window">
        <div class="chatbot-header">
            <p>チャットボット サポート</p>
            <button id="closeChatbot">x</button>
        </div>
        <div class="chatbot-messages" id="messages"></div>
        <div class="chatbot-input">
            <input type="text" id="userInput" placeholder="質問...">
            <button id="sendMessage">送信</button>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#openChatbot').click(function() {
                $('#openChatbot').fadeOut();
                $('.chatbot-window').fadeIn();

            });

            $('#closeChatbot').click(function() {
                $('.chatbot-window').fadeOut();
                $('#openChatbot').fadeIn();
            });

            $('#sendMessage').click(function() {
                let message = $('#userInput').val();
                $('#messages').append('<div>あなた: ' + message + '</div>');
 <figure class="figure-image figure-image-fotolife" title="チャットボット デモ用GIF">[f:id:enginiya:20230817232731g:plain]<figcaption>チャットボット デモ用GIF</figcaption></figure>
                $.post( "{{ route('ask') }}" , { message: message }, function(data) {
                    $('#messages').append('<div>Bot: ' + data + '</div>');
                });
                $('#userInput').val('');
            });
        });
    </script>
</body>
</html>