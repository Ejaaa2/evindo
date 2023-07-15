<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>EduWell - Education HTML5 Template</title>

    @include('layout.part.link')
  </head>

<body>
  {{-- header --}}
  @include('layout.part.header')

  {{-- content --}}
  <div class="w-full px-6 py-6 mx-auto">

  </div>
  @yield('konten')
  {{-- Footer --}}
  @include('layout.part.footer')
</body>
<!-- Scripts -->
@include('layout.part.script')
@yield('script')
</html>
