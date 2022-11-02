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
        </div>
    </div>
@endsection