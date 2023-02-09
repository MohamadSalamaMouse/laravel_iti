<!doctype html>
<html class="no-js" lang="">
@include('admin.layouts.head')
<body>
<aside id="left-panel" class="left-panel">
    @include('admin.layouts.aside')
</aside>

<div id="right-panel" class="right-panel">
    @include('admin.layouts.right-header')
    <div class="breadcrumbs">
        @yield('breadcrumbs')

    </div>
@yield('content')


    <div class="clearfix"></div>

    <!-- footer -->
    @include('admin.layouts.footer')

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
@include('admin.layouts.scripts')

</body>
</html>

