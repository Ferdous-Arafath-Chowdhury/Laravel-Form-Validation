<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
  

  <div class="card">
    <div class="card-body">
        @if (session('success')) 
     <h1> {{ session('success') }} </h1>
        @endif
    </div> 

    <div class="row mt-5">

       
      

        <div class="col lg-3"></div>

            <div class="card col-lg-6">

             
         <div class="card-body">
            <form  action="{{ route('add') }}" method="post">
                @csrf
               

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror"    id="exampleInputEmail1" aria-describedby="emailHelp"   value="{{old('Name')}}">
                    @error('Name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                {{-- <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email"  name="Email" class="form-control"  @error('Email') is-invalid @enderror   id="exampleInputEmail1" aria-describedby="emailHelp">
                
                </div> --}}


                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Email')}}">
                  @error('Email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>
              
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                
                <input type="password"  name="Password" class="form-control  @error('Password') is-invalid @enderror"    id="exampleInputPassword1">
                @error('Password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

         </div>
        </div> 

        <div class="col lg-3"></div>
   </div>


    
</body>
</html>