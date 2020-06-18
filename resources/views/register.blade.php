<!DOCTYPE html>
<html lang="en">
<head>

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Register</title>


                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

  

      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="col-lg-6">
          <div card mt-5>
            <div card-body>
          



      <h2>Register</h2>
      <form method="POST" action="/register">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="">
          </div>

          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="">
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="">
          </div>

          <div class="form-group">
            <button style="cursor: pointer;" type="submit" class="btn btn-primary">Submit</button>
          </div>
        
      </form>
    </div>
    </div>
    </div>
    </div>
</html>



	

