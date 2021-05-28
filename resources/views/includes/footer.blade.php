@section('footer')
    <div class="footer">
        <div class="footer-title">
            @if(Request::is('/'))
                If you have questions,
                call @show
            @endif
            @show
        </div>
    </div>
