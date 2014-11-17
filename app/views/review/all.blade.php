<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reviews</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<h1>Reviewr <span class="label label-warning">Beta</span></h1>
		
		<a href="/review/create">Review nog een vak</a>
		@foreach ($reviews as $r)
		<div class="row">
			<div class="col-xs-12">

				<h2>{{ $r->name }}</h2>

				<ul class="list-unstyled">

					<li>
						<div class="panel panel-default">
						  <div class="panel-body">
						    	<h4>{{$r->rating}}/5</h4>
						    	<p>{{$r->tips}}</p>
						  </div>
						</div>
					</li>

				</ul>
			</div>
		</div>
		@endforeach

		

	</div>

</body>
</html>