<!DOCTYPE html>
<html>

	<head>
		<title>Na kontaktoni</title>
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

			.error {color: #FF0000;}

			* {
				
				box-sizing: border-box;
			}

			body{

			   /*background-color: #334c68;*/
			   color: white;
			   background: rgb(2, 0, 36);
			   background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
			}

			.container {
				/*background-color: white;*/
				max-width: 400px;
				width: 100%;
				margin: auto;
				margin-top: 100px;
		    }
		    #contact input[type="text"],
			#contact input[type="number"],
			#contact input[type="gender"],
			#contact input[type="radio"],
			#contact button[type="submit"] {
				font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
			}

			#contact input[type="text"],
			#contact input[type="number"],
			#contact input[type="gender"],
			#contact input[type="radio"],
			#contact textarea {
				border-style: inset;
			}

			#contact textarea {
				height: 90px;
    			max-width: 70%;
    			resize: none;
			}
			#contact input[type="submit"] {
				cursor: pointer;
				width: 100%;
				border: none;
				background: rgb(0, 0, 0);
				color: #FFF;
				margin: 0 0 5px;
				padding: 25px 10px;
				font-size: 15px;
				text-transform: uppercase;
			}

			#contact input[type="submit"]:hover {
				background: #09C;
				-webkit-transition: 0.3s ease-in-out;
				-moz-transition: 0.3s ease-in-out;
				transition: background-color 0.3s ease-in-out;
			}

			#contact input[type="submit"]:active {
				box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
			}

		</style>

	</head>

	<body>
		<?php
			// define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $telephoneErr = "";
			$name = $email = $gender = $comment = $telephone = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  	if (empty($_POST["name"])) {
			    $nameErr = "Name is required";
				} else {
			    $name = test_input($_POST["name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
			      $nameErr = "Only letters and white space allowed"; 
				    }
				}

				if (empty($_POST["email"])) {
				    $emailErr = "Email is required";
				} else {
				    $email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				      $emailErr = "Invalid email format"; 
				    }
				}

				if (empty($_POST["telephone"])) {
				    $telephone = "";
				} else {
				    $telephone = test_input($_POST["telephone"]);
				    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
				    if (!preg_match("^\+(?:[0-9]????){6,14}[0-9]$/i",$telephone)) {
				      $telephoneErr = "Invalid telephone"; 
				    }
				}

				if (empty($_POST["comment"])) {
				    $comment = "";
				} else {
				    $comment = test_input($_POST["comment"]);
				}

				if (empty($_POST["gender"])) {
				    $genderErr = "Gender is required";
				} else {
				    $gender = test_input($_POST["gender"]);
				}
			}
		?>


		<div class="container">
			<div>
				<form method="post" action="mailto:punaideale@gmail.com" id="contact">
					<h4 style="font-size: 20px;">Na kontaktoni p??r t?? k??rkuar puntor??</h4>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
					  <label for="name">Name:</label><br> 
					  <input type="text" name="name" value="<?php echo $name;?>">
					  <span class="error">* <?php echo $nameErr;?></span>
					  <br><br>
					  <label for="email">E-mail:</label><br>
					  <input type="text" name="email" value="<?php echo $email;?>">
					  <span class="error">* <?php echo $emailErr;?></span>
					  <br><br>
					  <label for="number">Telephone:</label><br>
					  <input type="number" name="telephone" value="<?php echo $telephone;?>">
					  <span class="error"><?php echo $telephoneErr;?></span>
					  <br><br>
					  <label for="comment">Comment:</label><br>
					  <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
					  <br><br>
					  Gender:
					  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
					  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male  
					  <span class="error">* <?php echo $genderErr;?></span>
					  <br><br>
					  <input type="submit" name="submit" value="D??rgo">   
					</form>
				</form>
			</div>
		</div>
	</body>
</html>
