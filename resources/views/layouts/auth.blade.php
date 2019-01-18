<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    @yield('links')

    <style type="text/css">
    	body {
    		background: url('{{ asset('images/stripes-light.png')  }}');
    	}
    </style>
</head>

<body class="page-header-fixed">

    <div style="margin-top: 5%;"></div>

    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')
    @yield('scripts')
</body>
</html>