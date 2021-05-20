 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
        * {
            margin: auto;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        
        body {
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-size: 12px;
            line-height: 30px;
            color: #777;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
            background-size: cover;
        }
        
        .container {
            max-width: 400px;
            width: 100%;
            margin: auto;
        }
        
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact button[type="submit"] {
            font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
        }
        
        #contact {
            background: fade(#F9F9F9, 85);
            padding: 25px;
            margin: 80px 0;
        }
        
        #contact h3 {
            color: #000;
            display: block;
            font-size: 30px;
            font-weight: 400;
        }
        
        #contact h4 {
            margin: 5px 0 15px;
            display: block;
            font-size: 13px;
        }
        
        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }
        
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
            width: 100%;
            border: 1px solid #CCC;
            background: #FFF;
            margin: 0 0 5px;
            padding: 10px;
        }
        
        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #AAA;
        }
        
        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }
        
        #contact input[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            background: #000;
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
        
        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #999;
        }
        
        ::-webkit-input-placeholder {
            color: #888;
        }
        
        :-moz-placeholder {
            color: #888;
        }
        
        ::-moz-placeholder {
            color: #888;
        }
        
        :-ms-input-placeholder {
            color: #888;
        }
        
        label.error {
            color: darkred;
            padding-left: 10px;
            font-weight: bold;
        }
        
        input.error {
            border-color: darkred !important;
        }
    </style>
</head>
<body>
    <div class="container">
    <form method="post" action="kontakto.php" id="contact">
    <h4 style="font-size: 20px;  color: white;">Kyquni për të vazhduar tutje! </h4>
    <fieldset>
            <input type="text" name="email" placeholder="Email" value="">
    </fieldset>
    <fieldset>
            <input type="password" name="password" placeholder="Password" value="">
    </fieldset>
            <a href='#'> Forgot Password ?</a>
            <input type="submit" value="Login" />
        <br>
    </form>
</div>
</body>
</html>