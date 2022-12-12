<div id="faq_csv_modal_window">
    {{-- モーダルウィンドウ --}}
    @include('components.modal_window')
    @section('modal_window')
        <div id="modal_open">
            <header id="modal_header">
                モーダルヘッダーです。
            </header>
            <main id="modal_main">
    
            </main>
            <footer id="modal_footer">
                <p><a id="modal-close" class="button-link">閉じる</a></p>
            </footer>
        </div>
    @endsection
    @yield('modal_window')
    </div>