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

		<a href="/review/all">Bekijk alle reviews</a>

		<div class="row">
			<div class="col-xs-12">
				<h2>Review een vak</h2>
				
				
				<! -- 
				if validation is unsuccessful, show an error message here
				<div class="alert alert-danger" role="alert">...</div>
				-->


				<form role="form" method="post">
				  <div class="form-group">
				    <label for="course">Selecteer het vak waarvoor u een review wil achterlaten</label>
				    <select class="form-control" id="course" name="course">
					  <option>PHP 1</option>
					  <option>PHP 2</option>
					  <option>Webserverbeheer</option>
					</select>
				  </div>

					<div class="form-group">
						<label for="rating">Selecteer uw rating</label>
						<input type="range" id="rating" min="1" max="5" value="3">
						<p class="bg-info" id="currentRating" style="display: inline-block; padding: 0.3em;">U selecteerde 3</p>
					</div>

					<div class="form-group">
						<label for="tips">Geef anoniem tips om het vak beter te maken:</label>
						<textarea id="tips" class="form-control" rows="3"></textarea>
					</div>
				
					<button type="submit" class="btn btn-success">Review verzenden</button>

				</form>
			</div>
		</div>
		

	</div>

	<script>
		var range = document.getElementById("rating");
		range.addEventListener("change", function(){
			var rating = range.value;
			document.getElementById("currentRating").innerText = "U selecteerde " + rating;
		});
	</script>
</body>
</html>