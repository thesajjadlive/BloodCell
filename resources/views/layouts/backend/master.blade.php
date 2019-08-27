<!DOCTYPE html>
<html lang="en">



{{--Head start--}}
@include('layouts.backend._head')

{{--Head End--}}

<body>
<div class="main-wrapper">

    {{--Header start--}}
    @include('layouts.backend._header')

    {{--Header End--}}

    <div class="sidebar" id="sidebar">
        @include('layouts.backend._side_bar')
    </div>

    <div class="page-wrapper">
        <div class="content">
            @include('layouts.backend._messages')
            @yield('content')
        </div>

    </div>
</div>

@include('layouts.backend._scripts')

</body>




</div>



</html>