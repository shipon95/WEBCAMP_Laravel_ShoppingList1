@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
<main>
    <div class="buy">
        <h1>「買うもの」登録</h1>
            @if (session('front.task_register_success') == true)
                タスクを登録しました！！<br>
            @endif
            @if (session('front.task_delete_success') == true)
                タスクを削除しました！！<br>
            @endif
            @if (session('front.task_completed_success') == true)
                タスクを完了にしました！！<br>
            @endif
            @if (session('front.task_completed_failure') == true)
                タスクの完了に失敗しました....<br>
            @endif
            @if ($errors->any())
                <div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
                </div>
            @endif
            <form action="/shopping_list/register" method="post">
                @csrf
                「買うもの」名:<input name="name" value="{{ old('name') }}"><br>

                <button>「買うもの」を登録する</button>
            </form>

        <h1>「買うもの」登録一覧</h1>
        <a href="/completed_shopping_list/list" class="complete">購入済み「買うもの」一覧に移動</a>

        <table border="1" >
        <tr>
            <th>登録日
            <th>「買うもの」名
@foreach ($list as $task)
        <tr>
             <td>{{ $task->created_at->format('Y/m/d') }}
            <td>{{ $task->name }}
             <td><form action="{{ route('complete', ['shopping_list_id' => $task->id]) }}" method="post">
             @csrf <button onclick='return confirm("この「買うもの」を「完了」にします。よろしいですか？");' >完了</button>
             </form>
            <td>&nbsp&nbsp&nbsp
            <td><form action="{{ route('delete', ['shopping_list_id' => $task->id]) }}" method="post">
            @csrf @method("DELETE") <button onclick='return confirm("この「買うもの」を「削除」します。よろしいですか？");'>削除</button>
            </form>


@endforeach
        </table>
        <!-- ページネーション -->
        {{-- {{ $list->links() }} --}}
        現在 {{ $list->currentPage() }} ページ目<br>
        @if ($list->onFirstPage() === false)
            <a href="/shopping_list/list">最初のページ</a>
        @else
            最初のページ
        @endif
        /
        @if ($list->previousPageUrl() !== null)
            <a href="{{ $list->previousPageUrl() }}">前に戻る</a>
        @else
            前に戻る
        @endif
        /
        @if ($list->nextPageUrl() !== null)
            <a href="{{ $list->nextPageUrl() }}">次に進む</a>
        @else
            次に進む
        @endif
        <br>
        </div>
        </main>
@endsection