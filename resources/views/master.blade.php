<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
 <title>home</title>
</head>

<body >

  <header>
      @include('includes.navbar')
  </header>

  


  @yield('content')



  @include('includes.footer')


 </body>
</html>