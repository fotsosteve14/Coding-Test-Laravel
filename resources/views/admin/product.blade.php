<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">
          .title{
            color:white;
            padding-top:25px; 
            font-size:25px;
          }

          label{
              display:inline-block ;
              width: 200px;
          }

      </style>
  </head>
  <body>

      @include('admin.siderbar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="left">

            <h1 class="title">Add Product</h1>
            <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">x</button>
            @if(session()->has('message'))

            {{session()->get('message')}}

            @endif

            </div>
            

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                <label>Product title </label>
                <input type="text" style="color:black" name="title" placeholder="name of product" require>
            </div>

            <div style="padding:15px">
                <label>Price </label>
                <input type="number" style="color:black" name="price" placeholder="price of product" require>
            </div>

            <div style="padding:15px">
                <label>Description </label>
                <input type="text" style="color:black" name="description" placeholder="name of product" require>
            </div>

            <div style="padding:15px">
                <label>Quantity </label>
                <input type="number" style="color:black" name="qte" placeholder="quantity of product" require>
            </div>

            <div style="padding:15p x">
                <label> image </label>
                <input type="file" name="file" require>
            </div>

            <div style="padding:15px">
                <input class="btn btn-success" type="submit">
            </div>
        </form>
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
   </body>
</html>
