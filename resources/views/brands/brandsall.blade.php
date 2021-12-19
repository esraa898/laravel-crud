<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        
    </head>
    <body>
        <div class="container">
            <h1 class=" text-center bg-info col-12 text-white my-2"> All Brands</h1>
            <h3>
                 <a  class =" btn btn-secondary"href="{{route('create')}}">Add New Brand</a>
            </h3>
            <div class="row">
      <div class="col-md-8 offset-md-2">
          @if(session('done'))
          <h3 class="alert alert-warning  text-center">
            {{session('done')}}
          </h3>
          @endif
      <table class=" table table-bordered  table-hover">
         <thead class=" active">
             <th scope="col" >Id</th>
             <th scope="col" >Name</th>
             <th scope="col" >Description</th>
             <th scope="col"  colspan="2">Action</th>
         </thead>
         <tbody>
             @foreach($brands as $key => $brand)
             <tr>
                 <td >
                        {{++$key}}
                 </td>
                 <td>
                      {{$brand->name}}
                 </td>
                 <td>
                     {{$brand->description}}
                 </td>
                 <td >
                     <form method="post" action="{{route('delete.brand')}}">
                         @csrf
                         <input type="hidden"  name="brandId" value="{{$brand->id}}">
                         <button class="btn btn-success" type="submit" >Delete </button>
                     </form>
                 </td>
                 <td >
                     <form method="post" action="{{route('edit.brand')}}">
                         @csrf
                         <input type="hidden"  name="brandId" value="{{$brand->id}}">
                         <button class="btn btn-danger" type="submit" >Edit </button>
                     </form>
                 </td>
             </tr>
             @endforeach
         </tbody>
      </table>
        </div>
    </div>
</div> 
        <script src="" async defer></script>
    </body>
</html>