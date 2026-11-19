@if(Request::routeIs('home'))
    @include('partials.header1')
@else
    @include('partials.header2')
@endif
