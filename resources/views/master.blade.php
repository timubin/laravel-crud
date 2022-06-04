<!DOCTYPE html>
<html lang="en">
<head>
    @include("includes.meta")
    <title>@yield('title')</title>
   @include('includes.css')

</head><!--/head-->

<body>
	@include("includes.header")
	
    @yield('body')
	
    @include('includes.footer')
	


    @include('includes.js')
   
</body>
</html>