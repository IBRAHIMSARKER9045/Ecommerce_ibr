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
     .input_color{
        color: rgb(241, 10, 10);
        text color: black;

     }
     .center{
        margin :  auto;
        width: 50%;
        border: 3px solid rgb(42, 85, 94);
        margin-top: 30px;
        padding: 10px;
        text-align: center;
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
          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">X</button>
                {{ session()->get('message') }}
            </div>

          @endif

            <div class="div_center">
                <h6 class="h1_font">Add Category</h6>
                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                    <input class="input_color"type="text" name="catagory" placeholder="Enter Category Name">

                    <input type="submit"class="btn btn-primary"name="submit" value="Add Category">
                </form>

        </div>
        <table class="center">
            <tr>
                <td>Category Name |</td>
                <td>|Action</td>
            </tr>


        </div>
    </div>


    <!-- plugins:js -->
    @include('admin.js')

  </body>
</html>
