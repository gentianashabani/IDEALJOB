<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Puna Ime Ideale</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="stylee.css">
		
		<script src="script.js"></script>
		<script>
			function showHint(str) {
			  if (str.length == 0) { 
			    document.getElementById("txtHint").innerHTML = "";
			    return;
			  } else {
			    var xmlhttp = new XMLHttpRequest();
			    xmlhttp.onreadystatechange = function() {
			      if (this.readyState == 4 && this.status == 200) {
			        document.getElementById("txtHint").innerHTML = this.responseText;
			      }
			    }
			    xmlhttp.open("GET", "gethint.php?q="+str, true);
			    xmlhttp.send();
			  }
			}
		</script>
		<style type="text/css">
		    ruby{
		        font-size: 60px;
		    }
		</style>
	</head>

	<body onload="initList()" id="body">

		<header>
		  <nav>
		    <input id="nav-toggle" type="checkbox">
		    <div class="logo">Puna Ime Ideale</div>
		    <ul class="links">
		      <li><a href="index.php">Kryefaqja</a></li>
		      <li><a href="cv.html">Krijo CV</a></li>
		      <li><a href="quiz.php">Kuiz</a></li>
		      <li><a href="shpalljePune.php">Shpallje</a></li>
		      <li><a href="keshilla.php">K&eumlshilla</a></li>
		      <li><a href="index.php#aboutus">Rreth nesh</a></li>
		    </ul>
		    <label for="nav-toggle" class="icon-burger">
		      <div class="line"></div>
		      <div class="line"></div>
		      <div class="line"></div>
		    </label>
		  </nav>
		</header>

		<script>
			const successCallback = (position) => {
				console.log(position);
			};

			const errorCallback = (error) => {
				console.error(error);
			};

			navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
		</script>

		<div class="header">
				<form action=" ">
				    <label for="fname">Emri:</label>
		  			<input type="text" id="fname" name="fname" onkeyup="showHint(this.value)"><br>
	      		</form>
			<p>Suggestions: <span id="txtHint"></span></p>
		</div>
		<div class="body" >
			<?php
				echo "<h1>Premium</h1>";
			?>

			<div class="card-container" id="card-container"></div>	
		</div>
		
		<footer class="footer">
		    <div class="footer-left">
		      <img src="images/logo1.png" alt="logo">

		      <p>Na ndiqni n&euml rrjete sociale</p>
		      <br>
		      <div class="socials">
		        <a href="https://www.facebook.com/UniversitetiPrishtines"><i class="fa fa-facebook"></i></a>
		        <a href="https://www.instagram.com/uni.pr/"><i class="fa fa-instagram"></i></a>
		        <a href="https://www.uni-pr.edu/"><i class="fa fa-google"></i></a>
		      </div>
	    	</div>
		    <ul class="footer-right">
			    <li class="features">
				    <h2>Linqet</h2>

			        <ul class="box">
			          <li> <a href="index.php">Kryefaqja</a> </li>
			          <li> <a href="cv.html">Krijo CV</a> </li>
			          <li> <a href="quiz.php">Kuiz</a> </li>
			          <li> <a href="shpalljePune.php">Shpallje</a> </li>
			          <li> <a href="keshilla.php">K&eumlshilla</a> </li>
			        </ul>
		      	</li>

			    <li class="features">
			        <h2>Na Kontaktoni</h2>

			        <ul class="box">
			          <li> <a
			              href="https://www.google.com/maps/place/Universiteti+i+Prishtin%C3%ABs/@42.6484076,21.1665845,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x13549ec1b5430613:0x76c9353194f18686!2sUniversiteti+i+Prishtin%C3%ABs!8m2!3d42.6484076!4d21.1671317!3m4!1s0x13549ec1b5430613:0x76c9353194f18686!8m2!3d42.6484076!4d21.1671317">Rr.
			              "George Bush", Nr.31, 10 000 Prishtin??, Republika e Kosov??s</a></li>
			          <li> <a href="https://contacts.google.com/">Tel: +38345463922</a> </li>
			         <li> <a href="mailto:punaideale@gmail.com">Email: punaideale@gmail.com</a></li>
			        </ul>
			    </li>
	    	</ul>
		    <div class="footer-bottom">
		      <p>All Rights Reserved By &copy; UP-students 2021</p>
		    </div>
	    </footer>	
	</body>
</html>

