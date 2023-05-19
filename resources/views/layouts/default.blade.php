<!DOCTYPE html>
<html lang="en">
<head>
      @include('includes.head') 
</head>
<body>
@include('includes.headmenu') 
      @yield('content')
      @include('includes.footer')
</body>
</html>