<html>
	<head>
		<title>Laravel</title>
		<script src="{{ asset('/js/search.js') }}"></script>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="form-group">
					<label for="name" class="col-sm-2" control-label">Label:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="" id="search-input" onkeydown="down()" onkeyup="up()" placeholder="Input...">
					</div>
				</div>

				<div class="alert alert-info" id="search-result">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Title!</strong> Alert body ...
				</div>
			</div>
		</div>
	</body>
</html>
