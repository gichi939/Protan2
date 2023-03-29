@extends('layouts.control')

@section('content')
    <div class="container">
        <div class="css_list">
            <table>
                <thead>
                    <tr>
                        <th>単語の名前</th>
                        <th>単語の意味</th>
                        <th>単語の使い方</th>
                        <th>cssの例</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($css_words as $css_word)
                        <tr>
                            <td>{{ $css_word->css_name }}</td>
                            <td>{{ $css_word->css_meaning }}</td>
                            <td>{{ $css_word->css_HowToUse }}</td>
                            <td>{{ $css_word->css_example }}</td>
                            <td><a href="{{ route('edit.cssList', ['id' => $css_word->id]) }}">編集</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
