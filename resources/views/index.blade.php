<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Todo List</title>
  </head>
  <body>
    <h1>Todo List</h1>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <section class="vh-100" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card rounded-3">
              <div class="card-body p-4">
    
                <h4 class="text-center my-3 pb-3"></h4>
    
                <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2" method="post" action="{{route('addtodo')}}">
                  @csrf
                  <div class="col-12">
                    <div class="form-outline">
                      <input type="text" id="form1"name="name" class="form-control" />
                      <label class="form-label" for="form1">Enter a task here</label>
                    </div>
                  </div>
    
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
    
                  {{-- <div class="col-12">
                    <button type="submit" class="btn btn-warning">Get tasks</button>
                  </div> --}}
                </form>
    
                <table class="table mb-4">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Todo item</th>
                      <th scope="col">Status</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($get_all_task as $key=>$item)
                    <tr>
                      <th scope="row">{{$key}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->status}}</td>
                      <td>
                        <form action="{{route('deletetodo')}}" method="post">
                          @csrf
                          <input type="hidden" value="{{$item->id}}" name="id">
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <form action="{{route('markfinishtodo')}}" method="post">
                          @csrf
                          <input type="hidden" value="{{$item->id}}" name="id">
                          <button type="submit" class="btn btn-success ms-1">Finished</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>