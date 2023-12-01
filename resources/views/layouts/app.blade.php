@if( Auth::check())
    @include('layouts.header_login')
@else
    @include('layouts.header')
@endif
@yield('content')
@include('layouts.footer')