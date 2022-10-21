<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
 <title>home</title>
</head>

<body style="
background: #4b4a4a;
">

  <header>
    @include('includes.navbar')
  </header>

<main>
  @yield('content')
</main>

<footer>
  @include('includes.footer')
</footer>

 </body>
</html>