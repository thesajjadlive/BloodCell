<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend._head')
</head>



<body>

<div id="preloader">
    <span class="margin-bottom"><img src="{{ asset('frontend/images/loader.gif') }}" alt="" /></span>
</div>

<!--  HEADER -->

<header class="main-header clearfix">

@include('layouts.frontend._header')


</header> <!-- end main-header  -->

<!--  HOME BANNER BLOCK  -->
    @yield('content')

<!-- START FOOTER  -->

<footer>

    <!-- SECTION CTA  -->
    @include('layouts.frontend._footer')


</footer>

<!-- END FOOTER  -->

<!-- Back To Top Button  -->

<a id="backTop">Back To Top</a>

@include('layouts.frontend.scripts')

</body>
</html>