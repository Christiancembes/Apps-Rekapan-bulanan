<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<title>Login</title>
</head>

			<div class="container">
				<div class="row justify-content-center"></div>
				<div class="col-lg-6">
					<div vard mt-5>
						<div card-body>



							<h2>Login</h2>
							<form method="POST" action="/login">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" name="email" class="form-control" id="email">
								</div>

								<div class="form-group">
									<label for="password">Password:</label>
									<input type="password" name="password" id="password" class="form-control">
								</div>

								<div class="form-group">
									<button style="cursor: pointer;" type="submit" class="btn btn-primary">Login</button>
								</div>
							</form>
					</div>
				</div>
			</div>



