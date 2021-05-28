@section('header')
    <div class="header">
        <div class="header-title">
            @if(Request::is('/'))
                Write a comment
            @endif
            @show
        </div>
    </div>
