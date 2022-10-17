<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


<style type="text/css">
     .div_center{
        text-align: center;
        padding-top: 40px;
     }
     .h1_font{
        font-size: 30px;

        padding-bottom: 20px;
     }
     .input_clolor{
        color: rgb(241, 10, 10);
        text color: black;

     }

     </style>


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
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h6 class="h1_font">Add Category</h6>
                <form>
                    <input class="input_color"type="text" name="catagory" placeholder="Enter Category Name">

                    <input type="submit"class="btn btn-primary"name="submit" value="Add Category">
                </form>

        </div>
        </div>
    </div>


    <!-- plugins:js -->
    @include('admin.js')

  </body>
</html>
