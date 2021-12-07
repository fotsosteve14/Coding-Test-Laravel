<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>

      @include('admin.siderbar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->title}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>
      <td>
          <img src="/productimage/{{$product->image}}" alt="">
      </td>
      <td>
          <a href="{{url('updateview',$product->id)}}" class="btn btn-primary">Update</a>
      </td>
      <td><a href="{{url('deleteproduct',$product->id)}}" class="btn btn-danger">Delete</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
          <!-- partial -->
          @include('admin.script')
   </body>
</html>
