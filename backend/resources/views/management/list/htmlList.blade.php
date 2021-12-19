@extends('layouts.control')

@section('content')
    <div class="container">
        <div class="html_list">
            <table>
                <thead>
                    <tr>
                        <th width="10%">単語の意味</th>
                        <th width="20%">単語の使い方</th>
                        <th width="50%">htmlの例</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($html_words as $html_word)
                    <tr>
                        <td>{{ $html_word->html_meaning }}</td>
                        <td>{{ $html_word->html_HowToUse }}</td>
                        <td>{{ $html_word->html_example }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
