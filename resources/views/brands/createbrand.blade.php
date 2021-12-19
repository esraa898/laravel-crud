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
            <h1 class=" text-center bg-info col-12 text-white my-2"> Add Brand</h1>
            <div class="row">
          
      <div class="col-md-8 offset-md-2">  
           @if(Session::has('errors'))
        @foreach(Session::get('errors')->all() as $error)
        <h5 class="alert alert-dark " style="color: red;">
           {{$error}}
       </h5>
       @endforeach
       @endif
          <form method="post" action="{{route('brand.store')}}">
              @csrf
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
         <input type="text" class="form-control" name="name" id="exampleFormControlInput1" >
            </div>
           <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label"> Brand Description</label>
          <textarea class="form-control"  name= "description"id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
            
             <button type="submit" name ="submit "class="btn btn-primary mb-3">Add brand</button>
            
            </form>
        </div>
    </div>
</div> 
        <script src="" async defer></script>
    </body>
</html>