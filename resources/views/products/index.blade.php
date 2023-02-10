<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-2 float-end offset-10">
          <a class="btn btn-primary btn-sm" href="{{ url('product/create') }}">Create Product</a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Detail</th>
            <th>Action</th>
        </tr>
        @forelse($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
            
                    <a href="{{ url('product/'.$product->id) }}" class="btn btn-sm btn-primary ">Show</a>
                            
                    <a href="{{ url('product/'.$product->id.'/edit') }}" class="btn btn-sm btn-secondary ">Edit</a>

                    <form action="{{ url('product/'.$product->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
            </td>
        </tr>
        @empty
        @endforelse
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
