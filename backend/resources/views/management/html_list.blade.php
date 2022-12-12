@extends('layouts.control')

@section('content')
    <div class="container">
        <div class="html_list">
            <table>
                <thead>
                    <tr>
                        <th>単語の名前</th>
                        <th>単語の意味</th>
                        <th>単語の使い方</th>
                        <th>htmlの例</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($html_words as $html_word)
                    <tr>
                        <td>{{ $html_word->html_name }}</td>
                        <td>{{ $html_word->html_meaning }}</td>
                        <td>{{ $html_word->html_HowToUse }}</td>
                        <td>{{ $html_word->html_example }}</td>
                        <td><a href="{{ route('edit.htmlList', ['id' => $html_word->id])}}">編集</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav>
                <button class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            <!-- モーダル本体 -->
            <div class="modal-container">
                <div class="modal-body">
                    <!-- 閉じるボタン -->
                    <div class="modal-close">×</div>
                    <!-- モーダル内のコンテンツ -->
                    <div class="modal-content">
                        <form method="get" action="{{ route('search.index') }}">
                            <input type="search" placeholder="単語名を入力" name="search" value="@if (isset($search)) @endif">
                            <div>
                                <button type="submit">検索</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </nav>
        </div>
    </div>
@endsection