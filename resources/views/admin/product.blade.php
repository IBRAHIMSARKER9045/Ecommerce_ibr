
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .font_size {
            font-size: 40px;
            padding-bottom: 20px;
        }

</style>
  </head>
  <body>
    <div class="container-scroller">
        <!--sidebar start-->
      @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')


    <!-- body -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="div_center">
            <h1 class="font_size">Add Product</h1>

            <form>


    </div>
    </div>


    <!-- plugins:js -->
    @include('admin.js')

  </body>
</html>
