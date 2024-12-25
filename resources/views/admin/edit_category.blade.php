<!DOCTYPE html>
<html>
  <head> 
    <!-- include admin css file -->
   @include('admin.css')

   <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
        /* height: 200px; */
    }
    input[type="text"]
    {
        width: 400px;
        height: 50px;
    }
    
   </style>
  </head>
  <body>
    <!-- header -->
  @include('admin.header')  
  <!-- Header Ends  -->

   <!-- Sidebar Navigation-->
  @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <h1 style="color: white;">Update Category</h1>
<div class="div_deg">
        <form action="{{url('update_category',$data->id)}}" method="post">
            @csrf
            <input type="text" name="category" value="{{$data->category_name}}">
            <input class="btn btn-primary" type="submit" value="Update Category">
        </form>
      </div>
        @include('admin.body')
          </div>
      </div> 
    </div>
    <!-- JavaScript files-->
    @include('admin.js')

  </body>
</html>