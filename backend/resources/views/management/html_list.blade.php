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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($html_words as $html_word)
                        <tr>
                            <td>{{ $html_word->html_name }}</td>
                            <td>{{ $html_word->html_meaning }}</td>
                            <td>{{ $html_word->html_HowToUse }}</td>
                            <td><a href="{{ route('edit.htmlList', ['id' => $html_word->id]) }}">編集</a></td>
                            <td>
                                <form action="{{ route('destroy.htmlList', ['id'=>$html_word->id]) }}" method="POST" style="margin: 0">
                                  @csrf
                                  <button type="submit" style="margin: 0">削除</button>
                                </form>
                              </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
