<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
            

            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                <label>Product title </label>
                <input type="text" style="color:black" name="title" value="{{$data->title}}" require>
            </div>

            <div style="padding:15px">
                <label>Price </label>
                <input type="number" style="color:black" name="price" value="{{$data->price}}" require>
            </div>

            <div style="padding:15px">
                <label>Description </label>
                <input type="text" style="color:black" name="description" value="{{$data->description}}" require>
            </div>

            <div style="padding:15px">
                <label>Quantity </label>
                <input type="number" style="color:black" name="qte" value="{{$data->quantity}}" require>
            </div>

            <div style="padding:15p x">
                <label> Old Image </label>
                <img heigth="100" width="100" src="/productimage/{{$data->image}}" alt="">
            </div>

            <div style="padding:15px">
                <label> Change image </label>
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
