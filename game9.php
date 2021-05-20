<?php
ob_start();
try {
    #tregon erroret nese ka 
} catch (Exception $e) {
  ob_end_clean();
  displayErrorPage($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="game9.css">
</head>

<body>

    <div class="container">

        <h1 class="header-one">Klikoni në përgjigjjen që ju përshtatet... </h1>
          <h2 class="header-two" >  
            
            *Nuk më përshtatet- 0 Pikë
            <br>

            *Përshtatet pak- 1 Pikë
            <br>

            *Përshtatet- 2 Pikë
            <br>

            *Përshtatet shumë - 3 Pikë
        </h2>

        <br>
        <?php

function test() {
    try {
        throw new Exception('Fusha');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return '<p> <font size = 5><b>Fusha e interesit 9 Gjuha, Letërsia, Lajmet, Teatri,  Muzika, Arti dhe Shkencat Humane</font></b></font> </p>';
    }
}

echo test("");
?>
        <div id="question-1">
        <?php  echo "<p> <font size = 4>1.Gjuha amtare është lënda më e preferuar e imja.</font> </p>";?>
            <form id="form-question-1">
                <button id="first-choice-1" data-points="0" onclick="addPoints('first-choice-1'); disableButtons('first')">Nuk më përshtatet</button>  
                <button id="first-choice-2" data-points="1" onclick="addPoints('first-choice-2'); disableButtons('first')">Përshtatet pak</button>
                <br>
                <button id="first-choice-3" data-points="2" onclick="addPoints('first-choice-3'); disableButtons('first')">Përshtatet</button>
                <button id="first-choice-4" data-points="3" onclick="addPoints('first-choice-4'); disableButtons('first')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-2">
        <?php  echo "<p> <font size = 4>2.Interesohem për Histori.</font> </p>";?>
            <form id="form-question-2">
                <button id="second-choice-1" data-points="0" onclick="addPoints('first-choice-1'); disableButtons('second')">Nuk më përshtatet</button>  
                <button id="second-choice-2" data-points="1" onclick="addPoints('second-choice-2'); disableButtons('second')">Përshtatet pak</button>
                <br>
                <button id="second-choice-3" data-points="2" onclick="addPoints('second-choice-3'); disableButtons('second')">Përshtatet</button>
                <button id="second-choice-4" data-points="3" onclick="addPoints('second-choice-4'); disableButtons('second')">Përshtatet shumë</button>   
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>3.Me dëshirë shkoj në teatër dhe koncert.</font> </p>";?>
            <form id="form-question-3">
                <button id="third-choice-1" data-points="0" onclick="addPoints('third-choice-1'); disableButtons('third')">Nuk më përshtatet</button>
                <button id="third-choice-2" data-points="1" onclick="addPoints('third-choice-2'); disableButtons('third')">Përshtatet pak</button>
                <br>
                <button id="third-choice-3" data-points="2" onclick="addPoints('third-choice-3'); disableButtons('third')">Përshtatet</button>
                <button id="third-choice-4" data-points="3" onclick="addPoints('third-choice-4'); disableButtons('third')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-4">
        <?php  echo "<p> <font size = 4>4.Më kënaqësi shkruaj ese.</font> </p>";?>
            <form id="form-question-4">
                <button id="fourth-choice-1" data-points="0" onclick="addPoints('fourth-choice-1'); disableButtons('fourth')">Nuk më përshtatet</button>
                <button id="fourth-choice-2"data-points="1" onclick="addPoints('fourth-choice-2'); disableButtons('fourth')">Përshtatet pak</button>
                <br>
                <button id="fourth-choice-3"data-points="2" onclick="addPoints('fourth-choice-3'); disableButtons('fourth')">Përshtatet</button>
                <button id="fourth-choice-4"data-points="3" onclick="addPoints('fourth-choice-4'); disableButtons('fourth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>5.Leximi është hobi im.</font> </p>";?>
            <form id="form-question-3">
                <button id="fifth-choice-1"data-points="0" onclick="addPoints('fifth-choice-1'); disableButtons('fifth')">Nuk më përshtatet</button>
                <button id="fifth-choice-2"data-points="1" onclick="addPoints('fifth-choice-2'); disableButtons('fifth')">Përshtatet pak</button>
                <br>
                <button id="fifth-choice-3"data-points="2" onclick="addPoints('fifth-choice-3'); disableButtons('fifth')">Përshtatet</button>
                <button id="fifth-choice-4"data-points="3" onclick="addPoints('fifth-choice-4'); disableButtons('fifth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>6.Në klasë me dëshirë paraqes përmbledhjen e një libri.</font> </p>";?>
            <form id="form-question-3">
                <button id="sixth-choice-1"data-points="0" onclick="addPoints('sixth-choice-1'); disableButtons('sixth')">Nuk më përshtatet</button>
                <button id="sixth-choice-2"data-points="1" onclick="addPoints('sixth-choice-2'); disableButtons('sixth')">Përshtatet pak</button>
                <br>
                <button id="sixth-choice-3"data-points="2" onclick="addPoints('sixth-choice-3'); disableButtons('sixth')">Përshtatet</button>
                <button id="sixth-choice-4"data-points="3" onclick="addPoints('sixth-choice-4'); disableButtons('sixth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>7.Me kënaqësi mendoj në mënyrë kritike lidhur me gjëra që kam parë, dëgjuar apo lexuar.</font> </p>";?>
            <form id="form-question-3">
                <button id="seventh-choice-1"data-points="0" onclick="addPoints('seventh-choice-1'); disableButtons('seventh')">Nuk më përshtatet</button>
                <button id="seventh-choice-2"data-points="1" onclick="addPoints('seventh-choice-2'); disableButtons('seventh')">Përshtatet pak</button>
                <br>
                <button id="seventh-choice-3"data-points="2" onclick="addPoints('seventh-choice-3'); disableButtons('seventh')">Përshtatet</button>
                <button id="seventh-choice-4"data-points="3" onclick="addPoints('seventh-choice-4'); disableButtons('seventh')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>8.Interesohem për tregime, gojëdhëna dhe përralla nga e gjithë bota.</font> </p>";?>
            <form id="form-question-3">
                <button id="eighth-choice-1"data-points="0" onclick="addPoints('eighth-choice-1'); disableButtons('eighth')">Nuk më përshtatet</button>
                <button id="eighth-choice-2"data-points="1" onclick="addPoints('eighth-choice-2'); disableButtons('eighth')">Përshtatet pak</button>
                <br>
                <button id="eighth-choice-3"data-points="2" onclick="addPoints('eighth-choice-3'); disableButtons('eighth')">Përshtatet</button>
                <button id="eighth-choice-4"data-points="3" onclick="addPoints('eighth-choice-4'); disableButtons('eighth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>9.Me kënaqësi e luaj një rol teatral, për të cilin duhet mësuar përmendësh tekstin dhe të paraqitem.</font> </p>";?>
            <form id="form-question-3">
                <button id="ninth-choice-1"data-points="0" onclick="addPoints('ninth-choice-1'); disableButtons('ninth')">Nuk më përshtatet</button>
                <button id="ninth-choice-2"data-points="1" onclick="addPoints('ninth-choice-2'); disableButtons('ninth')">Përshtatet pak</button>
                <br>
                <button id="ninth-choice-3"data-points="2" onclick="addPoints('ninth-choice-3'); disableButtons('ninth')">Përshtatet</button>
                <button id="ninth-choice-4"data-points="3" onclick="addPoints('ninth-choice-4'); disableButtons('ninth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>10.Me dëshirë do shkruaja një artikull për një gazetë.</font> </p>";?>
            <form id="form-question-3">
                <button id="tenth-choice-1"data-points="0" onclick="addPoints('tenth-choice-1'); disableButtons('tenth')">Nuk më përshtatet</button>
                <button id="tenth-choice-2"data-points="1" onclick="addPoints('tenth-choice-2'); disableButtons('tenth')">Përshtatet pak</button>
                <br>
                <button id="tenth-choice-3"data-points="2" onclick="addPoints('tenth-choice-3'); disableButtons('tenth')">Përshtatet</button>
                <button id="tenth-choice-4"data-points="3" onclick="addPoints('tenth-choice-4'); disableButtons('tenth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>11.Ndjehem mirë kur jam i rrethuar me libra.</font> </p>";?>
            <form id="form-question-3">
                <button id="eleventh-choice-1"data-points="0" onclick="addPoints('eleventh-choice-1'); disableButtons('eleventh')">Nuk më përshtatet</button>
                <button id="eleventh-choice-2"data-points="1" onclick="addPoints('eleventh-choice-2'); disableButtons('eleventh')">Përshtatet pak</button>
                <br>
                <button id="eleventh-choice-3"data-points="2" onclick="addPoints('eleventh-choice-3'); disableButtons('eleventh')">Përshtatet</button>
                <button id="eleventh-choice-4"data-points="3" onclick="addPoints('eleventh-choice-4'); disableButtons('eleventh')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>12.Gjuhët e huaja janë lëndët më të preferuara.</font> </p>";?>
            <form id="form-question-3">
                <button id="twelfth-choice-1"data-points="0" onclick="addPoints('twelfth-choice-1'); disableButtons('twelfth')">Nuk më përshtatet</button>
                <button id="twelfth-choice-2"data-points="1" onclick="addPoints('twelfth-choice-2'); disableButtons('twelfth')">Përshtatet pak</button>
                <br>
                <button id="twelfth-choice-3"data-points="2" onclick="addPoints('twelfth-choice-3'); disableButtons('twelfth')">Përshtatet</button>
                <button id="twelfth-choice-4"data-points="3" onclick="addPoints('twelfth-choice-4'); disableButtons('twelfth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>13.Me dëshirë e shkruaj atë që kam përjetuar.</font> </p>";?>
            <form id="form-question-3">
                <button id="thirteenth-choice-1"data-points="0" onclick="addPoints('thirteenth-choice-1'); disableButtons('thirteenth')">Nuk më përshtatet</button>
                <button id="thirteenth-choice-2"data-points="1" onclick="addPoints('thirteenth-choice-2'); disableButtons('thirteenth')">Përshtatet pak</button>
                <br>
                <button id="thirteenth-choice-3"data-points="2" onclick="addPoints('thirteenth-choice-3'); disableButtons('thirteenth')">Përshtatet</button>
                <button id="thirteenth-choice-4"data-points="3" onclick="addPoints('thirteenth-choice-4'); disableButtons('thirteenth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>

        <div id="question-3">
        <?php  echo "<p> <font size = 4>14.Nganjëherë mendoj për veten time dhe jetën.</font> </p>";?>
            <form id="form-question-3">
                <button id="fourteenth-choice-1"data-points="0" onclick="addPoints('fourteenth-choice-1'); disableButtons('fourteenth')">Nuk më përshtatet</button>
                <button id="fourteenth-choice-2"data-points="1" onclick="addPoints('fourteenth-choice-2'); disableButtons('fourteenth')">Përshtatet pak</button>
                <br>
                <button id="fourteenth-choice-3"data-points="2" onclick="addPoints('fourteenth-choice-3'); disableButtons('fourteenth')">Përshtatet</button>
                <button id="fourteenth-choice-4"data-points="3" onclick="addPoints('fourteenth-choice-4'); disableButtons('fourteenth')">Përshtatet shumë</button>
            </form>
        </div>

        <hr>
        
        <button id="endButton" onclick="sumPoints()">Përfundo</button>
        
        <div id="displayPoints"></div>

        <hr>

    </div>  
    <script src="game.php"></script>
    <script src="game2.php"></script>
    <script src="game3.php"></script>
    <script src="game4.php"></script>
    <script src="game5.php"></script>
    <script src="game6.php"></script>
    <script src="game7.php"></script>
    <script src="game8.php"></script>
    <script src="game.js"></script>

    <div class="container">
        <h2 class="header-two">Nëse keni marr pikët...</h2>
        <h3 class="header-three" >
            Prej 0-10 - Nuk ju përshtatet<br>
            Prej 11-20 - Ju përshtatet pak<br>
            Prej 21-30 - Ju përshtatet <br>
            Prej 31-42 - Ju përshtatet shumë
        </h3>
    </div>
</div>

     <div class="contanier">
        <div id=" home" class="flex-column flex-center">
            <a href="projekti.php" class="btn">Filloni përsëri</a>
        </div>


    
</body>

</html>
