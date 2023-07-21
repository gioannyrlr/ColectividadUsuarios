<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Proyecto Final</title>

<!-- Icon -->
<link rel="shortcut icon" href="resources/img/icon.png" type="image/x-icon">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="resources/css/styles.css">

<!-- Alertify -->
<link rel="stylesheet" href="resources/css/alertify/alertify.min.css"/>
<link rel="stylesheet" href="resources/css/alertify/default.min.css"/>
<script src="resources/js/alertify.min.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- JQuery  -->
<script src="resources/js/jquery-2.1.3.min.js"></script>

<script>
$(function() {
	// Ajax
	jQuery('#button').click(function (e) {
		var fi = jQuery("#fi").val();
		var ff = jQuery("#ff").val();
		jQuery.ajax({
			type: "POST",
			url: "./submit.php",
			data: "fi=" + fi + "&ff="+ ff,
			success: function (data) {
				$('#resultado').html(data);
			}
		});				
		return false;
	});
});
</script>
</head>
<body style="background-color: rgb(242,242,247); color: rgb(28,28,30);">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="container">
				<div class="navbar-header">
					<div>
					<img src="resources/img/icon.png" style="width: 120px; margin-top:10px;" href="index.php" alt="">
					</div>
					<a class="navbar-brand title"><br>
						<span>Colectividad de usuarios</span><br>
						<span style="font-weight: 200;">Circunvalación 1</span>
					</a>				
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-boon">
				<div class="panel-body">
					<div class="page-header" style="margin:10px 0 20px!important;">
						<span style="font-size:20px;"><img src="resources/img/add.png" style="width: 18px; margin: 0px 2px 3px 0px;">&nbsp;Bienvenid@ - <b>Iniciar simulación</b></span>
					</div>
					<div class="row">
						<form action="#" method="post">
							<div class="col-md-12">
								<b style="font-size:17px; margin-right: 20px;">Fecha inicial de la simulación</b><input type="datetime-local" id="fi" name="fi" autocomplete="off"><br><br>
							</div>
							<div class="col-md-12">
								<b style="font-size:17px; margin-right: 32px;">Fecha final de la simulación</b><input type="datetime-local" id="ff" name="ff" autocomplete="off"><br><br>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-7 ">
								<input id="button" class="btn" type="submit" value="Iniciar">
							</div>
						</form>
						</div>
						<div id="resultado"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>