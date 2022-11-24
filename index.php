<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
				<form action="" method="POST">
					<label>Search users here...</label>
					<div class="auto-widget">
						<input class="form-control" id="search" type="text" name="users" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#search").autocomplete({
			source: 'search.php',
			minLength: 0,
		});
	});
</script>

</html>