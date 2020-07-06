<!DOCTYPE html>
<html>
<head>
	<title>Input Pemasukkan</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	
	<!-- link datepicker -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>


<body>

	<div class="container">
		@yield('content')
	</div>

	<!-- javascript datetime -->
	<script type="text/javascript">
		$('.date').datepicker({
			format: 'yyyy-mm-dd'
		});
	</script>

</body>


</html>