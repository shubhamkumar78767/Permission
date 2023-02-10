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
        <div class="row">
            <div class="col-md-6 offset-3 mt-5"> 
                <form action="{{ url('product') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Product Name</label>
                        <input type="text" required name="name" class="form-control" value="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Product Detail</label>
                        <textarea required class="form-control" name="detail" id="" cols="30" rows="5"></textarea>
                    </div>
                    
                    <div class="form-group mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
