<!DOCTYPE html>
<html>
  <head> 
    <!-- include admin css file -->
   @include('admin.css')
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

        @include('admin.body')
          </div>
      </div> 
    </div>
    <!-- JavaScript files-->
    @include('admin.js')

  </body>
</html>