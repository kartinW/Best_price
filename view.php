<!DOCTYPE html>
<!-- Jiatian Wang
Jialiang Wang -->
<html>
<head>
<meta charset="UTF-8">
<title>Best Price</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles.css">

<body>
	<h3 class ="page-header"><img src="BestPriceIcon.png" alt="Best Price Icon" height="50" width="200"> will gve you the <b>Be$t Price !</b></h3>
 <div class="wrapper">

	<a href="register.php" class="btn btn-warning">SignUp</a>
 	<a href="login.php" class="btn btn-warning">Login</a>
	<h2>Search Buyer's Post</h2>
	<br>
	<input type="text" id="inp">
	<br>
	<br>
	<input type="button" class="btn btn-primary" name="item" value="Search"
		onclick="comunicate()">


	<br>
	<br>


	<div id="change"></div>
	</div>
	<div id="test"></div>
	<script>
		function comunicate() {

			var change = document.getElementById("change");
			var test = document.getElementById("test");

			var x = document.getElementById("inp");

			var ajax = new XMLHttpRequest();
			ajax.open("GET", "controller.php?item=" + x.value,
					true);
			ajax.send();

			ajax.onreadystatechange = function() {
				if (ajax.readyState == 4 && ajax.status == 200) {

					var respon = ajax.responseText;
					//test.innerHTML = respon;
					//change.innerHTML += respon;
					var res = JSON.parse(respon);
					var disply = "<br><table>";
					//test.innerHTML = respon;
					for (var i = 0; i < res.length; i++) {
							disply += "<tr><td>" + res[i].brand + "|" + res[i].model +
							 "|" + res[i].price + "|" + res[i].conditions + "</tr></td>";
						};
					disply += "</table>";
					change.innerHTML = disply;
					if (res.length == 0) {
						change.innerHTML = "No matches for '" + x.value + "'";
					}
					;
				}
			};
		}
	</script>


</body>
</html>
