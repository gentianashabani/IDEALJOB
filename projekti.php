<?php
  class kuiz {
    public $name;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
}
class fusha extends kuiz {
    public function message() {
      echo "A jeni gati ta vlerësoni veten? "; 
    }
  }
$fusha1= new fusha("fusha1");
$fusha1->message();


$quiz = new kuiz();
$quiz->set_name('Një kuiz i thjeshtë për tu orientuar në karrierë');
echo $quiz->get_name();
echo '
<span style="color: black;">
';
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="projekti.css" />
    <link rel="stylesheet" href="game.css"/>
    <link rel="stylesheet" href="game2.css"/>
    <link rel="stylesheet" href="game3.css"/>
    <link rel="stylesheet" href="game4.css"/>
    <link rel="stylesheet" href="game5.css"/>
    <link rel="stylesheet" href="game6.css"/>
    <link rel="stylesheet" href="game7.css"/>
    <link rel="stylesheet" href="game8.css"/>
    <link rel="stylesheet" href="game9.css"/>

</head>
<body>
    
    <div class="contanier">
        <div id=" home" class="column center">
            <p style="font-size:larger; margin-bottom: 9rem;">Luaj kuiz </p>
            <a href="game.php" class="book">Filloni</a>
            <div class="audio" style="width:110px; margin-left:auto; position:relative; margin-top: 20rem;">
                 <audio controls autoplay style="width:100%;"> <source src="audio1.mp3">Ky shfletues nuk e mbështet etiketën audio</audio>
                 </div>
        </div>
    </div>

   
</body>
</html>
