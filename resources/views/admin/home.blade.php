
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        <!--sidebar start-->
      @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')


    <!-- body -->
    @include('admin.body')


    <!-- plugins:js -->
    @include('admin.js')

  </body>
</html>
