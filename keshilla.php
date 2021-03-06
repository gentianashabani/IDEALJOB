<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>K&eumlshilla</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/keshilla.css">

</head>

<body>
  <header>
    <nav>
      <input id="nav-toggle" type="checkbox">
      <div class="logo">Puna ime ideale</div>
      <ul class="links">
        <li><a href="index.php">Kryefaqja</a></li>
        <li><a href="cv.html" target="_blank">Krijo CV</a></li>
        <li><a href="quiz.php" target="_blank">Kuiz</a></li>
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

  <div class="intervista1">
     <?php 
    define("pr", "<h1>Prezantimi gjatë një interviste për punë</h1>");
    echo pr;
     ?>
       <p>
      <img class="inimg" src="img/interview1.jpg" alt="intervista1">
      <?php  
      echo "<br><h3>Intervista është proces i komunikimit në dy drejtime me rekrutuesit dhe aplikuesit. Në
      këtë fazë të procesit të selektimit, udhëzimet, personaliteti dhe rezultatet kanë rëndësi të
      njëjtë. Për këtë arsye, është e nevojshme të bëhet dallimi mes llojeve të ndryshme të
      intervistave.
      Intervista është mundësi për ju të tregoni se përshtateni me pozitën e kërkuar, por edhe
      koha për marrjen e informatës që nuk mund të merret askund tjetër.
      Intervistat mund të dështojnë nëse keni shumë pak eksperiencë në këtë sens ose pak
      praktikë, por nëse përgatiteni për intervistën mund të ndiheni më konfident dhe ndoshta
      do të dilni më mirë. </h3>";
        ?>
    </p>
  </div>
  <hr>

  <div class="intervista2">
    <?php 
      echo "<h1>Si duhet t&euml visheni n&euml nj&euml intervist&euml pune </h1>";
     ?>
    <figure>
      <img src="img/interview2.png" alt="veshje" width="100%" id="veshje">
      <figcaption> <mark style="background: rgba(21, 134, 189, 1); color:white;">Disa lloje t&euml veshjeve</mark></figcaption>
    </figure>
    <br>
    <?php 
echo "<p>Ndonëse për shumë njerëz veshëmbathja në një intervistë pune nuk përbën diçka të një rëndësie të veçantë, ndër përshtypjet e para të një punëdhënësi është edhe stili i veshjes.
      Kësisoj, krahas aftësive profesionale, veshja luan një rol të rëndësishëm po ashtu. Ka shumë opsione të cilat mund t'i konsideroni për t’i veshur në një intervistë pune, varësisht prej kompanisë ku keni aplikuar.</p>";
        

     ?>
    
    <br>
    <div class="veshjeMF">    
          <?php 
          $m = "<b>P&eumlr meshkuj<br></b>";
            $f = str_replace("meshkuj" , "vajza" ,$m);
            echo $m;

            $veshjetm = array("Kostum me ngjyra të mbyllta si e zezë apo e hirtë", "Këmishë me mëngë të gjata, me ngjyrë të bardhë ose e kombinuar me kostumin", "Rrip lëkure", "Çorape të errëta dhe këpucë lëkure");
            $arrlength = count($veshjetm);
            echo "<ul>";
            for($x = 0; $x < $arrlength; $x++) {
              echo "<li>$veshjetm[$x]<br>";
            }
            echo "</ul><br>";

            echo $f;

            $veshjetf = array("Veshje me ngjyrë të zezë ose gri", "Kostume nën gjunjë", "Bluzë të kombinuar me kostumin", "Këpucë më zyrtare", "Grim të lehtë (nëse përdorni)", "Jo shumë bizhuteri");
            $arrlength = count($veshjetf);

            echo "<ul>";
            for($x = 0; $x < $arrlength; $x++) {
              echo "<li>$veshjetf[$x]<br>";
            }
            echo "</ul><br>"; 
          ?>
      </div>
  </div>

    </div>
  </div>
  <hr>
  <div style="overflow-x:auto;">
    <table class=" styled-table">
      <thead>
        <tr>
          <th id="head1">Pyetjet m&euml t&euml shpeshta n&euml intervista</th>
          <th id="head1">Arsyeja e pyetjes</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>"Më trego për vetën tënde"</td>
          <td>Kjo pyetje është një lloj testi. Qëllimi i punëdhënësit është t’iu vlerësoj se si përgjigjeni në një pyetje të hapur dhe situata të pa strukturuara.
            Përgjigjja si: “Në rregull, çfarë dëshironi të dini për mua?” që praktikohet nga shumë kandidatë, zakonisht nuk preferohet nga punëdhënësit. Ata e interpretojnë këtë si zvarritje tuajën për të përfituar kohë në mungesë të idesë se si të
            përgjigjeni.
            Çfarë punëdhënësit kërkojnë këtu është përgjigjja në pyetjen që ata e kanë nënkuptuar: Cilat eksperienca, shkathtësi apo njohuri i keni që janë relevante me vendin e punës që unë dua të plotësoj? Është kjo pyetje që duhet ta adresoni në
            raste
            të tilla. Punëdhënësit janë të interesuar ta dëgjojnë historinë tuaj të punës dhe ndërlidhjen e saj me punën për të cilën po diskutoni, jo historinë tuaj personale.
            Punëdhënësit presin nga ju që t’i keni përgjigjet e gatshme, të strukturuara mirë, të përmbledhura dhe të përgatitura.</td>
        </tr>

        <tr>
          <td>“Pse keni aplikuar për këtë vend pune?”</td>
          <td> Kjo nënkupton, “Pse e keni përzgjedhur këtë vend pune për të aplikuar dhe jo ndonjë vend tjetër?”</td>
        </tr>

        <tr>
          <td>“Çfarë mund të bëni ju për neve?” </td>
          <td>Kjo nënkupton, “Nëse ju punësoheni, si do ta ndihmoni kompaninë? Cilat janë shkathtësitë e juaja dhe sa keni njohuri për fushën dhe temat që kjo pozitë përmban?”</td>
        </tr>

        <tr>
          <td>“Si e përshkruani vetën?” </td>
          <td>Kjo nënkupton, “A do të përshtateni në punën tonë? A jeni person që bashkëpunoni lehtë me të tjerët dhe a ndani vlerat e njëjta me vendin e punës?”</td>
        </tr>

        <tr>
          <td> Çfarë ju dallon juve nga të gjithë kandidatët e tjerë që kanë aplikuar për këtë punë?” </td>
          <td>Kjo nënkupton, “A keni shprehi më të mira të punës se sa të tjerët, sa jeni të përkushtuar të punoni, sa jeni më shpejtë se të tjerët, a mbani një standard të lartë të punës, a jeni në gjendje të punoni jashtë orarit?, etj''.</td>
        </tr>
        <tr>
          <th id="head2" colspan="2">Pyetje tjera q&euml mund t'ua parashtroj pun&eumldh&eumln&eumlsi</th>
        </tr>
        <tr>
          <td colspan="2">Çfarë dini për këtë kompani?</td>
        </tr>
        <tr>
          <td colspan="2">Pse jeni duke aplikuar për këtë pozitë?</td>
        </tr>
        <tr>
          <td colspan="2"> Cilat arritje tuaja iu kanë kënaqur më së shumti?</td>
        </tr>

        <tr>
          <td colspan="2">Çfarë lloji i punës iu pëlqen të bëni më së shumti?</td>
        </tr>

        <tr>
          <td colspan="2">Cilat janë pikat e juaja të forta dhe të dobëta?</td>
        </tr>

        <tr>
          <td colspan="2">Pse jeni larguar nga puna e fundit?</td>
        </tr>

        <tr>
          <td colspan="2">Ku e shihni vetën pas pesë vitesh?</td>
        </tr>

        <tr>
          <td colspan="2">Cilat janë qëllimet tuaja në jetë?</td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <div class="video1" style="margin:25px">
    <h4>Si t&euml krijosh CV</h4>
    <video src="CVvideo.mp4" width="100%" controls></video>
    <dl id="dl1">
      <dd>Kjo video &eumlsht&euml marr&euml nga YouTube</dd>
    </dl>
  </div>

  <div class="video2" style="margin:25px">
    <h4>Zgjedhja e karrier&eumls</h4>
    <video src="career.mp4" width="100%;" controls></video>
    <dl id="dl1">
      <dd>Kjo video &eumlsht&euml marr&euml nga YouTube</dd>
    </dl>
  </div>
 <hr>

  <h2 id="dragDrop">Th&eumlnje motivuese</h2>
  <div style=" display: flex;
  justify-content: center;">
<div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">

<?php
function Substring($str){
    $len = strlen($str);
    echo substr($str, 0,16), "<br>";
    echo substr($str, 16, -20 ), "<br>";
    echo substr($str, 22, -10), "<br>";
    echo substr($str,32), "<br>";
}
  
// Driver Code
$str="Will it be easy? NOPE Worth it? ABSOLUTELY";
Substring($str);
  
?>

 </div> <br>
<div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
  <?php 
   echo "<br>Opportunites don't happen,<br> you create them.";
   ?>
</div><br>
<div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
  <?php 
   echo "Choose a job you love,<br> and u will never have<br> to work a day in your life.";
   ?>
</div>
  </div><br><br>
  <div  style=" display: flex;
  justify-content: center;">
    <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
<?php 
class quotee{
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $work) {
    $this->name = $name;
    $this->work = $work; 
  }
  function __destruct() {
    echo "No metter where you are from,<br> your {$this->name} are {$this->work}."; 
  }
}

   $str = new quotee("dreams", "valid");
   $str->__destruct();
    
 ?>

</div>
    <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
<?php 
echo "An ideal job <br> Is where u can't be <br> Replaced ";
 ?>

</div>
    <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
<?php 
$text = "Don’t pick a job with great vacation time, ";
printf("%s <br>pick one that doesn’t need escaping from", $text);
 ?>

</div>
    <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
<?php
$fjalia = 'Find out what you like doing best, and gjeje  to pay you for doing it.';
$pattern = '/gjeje/i';
echo preg_replace($pattern, 'get someone', $fjalia);
?>

</div>

  </div><br>
  <div  style=" display: flex;
  justify-content: center;">
    <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
              <?php  
$arr=array ('A','job','is','who','you','are');  
echo implode(" ",$arr);  
?>  
    </div>
       <div style="width:400px; height: auto; background-color: #E1E5F3; font-size: 20px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              ">
    <?php
$f = "zcDon't stop until you're proudf";
echo trim($f,"zcf");
?>
    </div>

  </div>

  <h2 id="dragDrop">&#199;far&euml ke m&eumlsuar nga k&eumlshillat tona?</h2>
  <div class="drop">


    <div id="leftBox" ondragstart="dragStart(event)" ondragover="allowDrop(event)" ondrop="dropped(event)">
      <b> Në rregull</b><br>
      <hr>
    </div>

    <div id="middleBox" ondragstart="dragStart(event)">
      <b> Vendos fjalitë në vendin e duhur</b>
      <hr>
      <section class="words"><br><br>
        <section id="word1" draggable="true">Bëhu konfident, por jo i butë</section><br><br>
        <section id="word2" draggable="true">Të mbroni konfidencialitetin e "sekreteve" të punëdhënësit tuaj aktual</section><br><br>
        <section id="word3" draggable="true">Flit për problemet e tua personale</section><br><br>
        <section id="word4" draggable="true">Përqendrohuni vetëm te ju</section>
    </div>

    <div id="rightBox" ondragstart="dragStart(event)" ondragover="allowDrop(event)" ondrop="dropped(event)">
      <b> Nuk është në rregull<b>
          <hr>
    </div>
  </div>

  <script>
    var words = ["word1", "word2", "word3", "word4"];
    var right = ["word1", "word2"];
    var wrong = ["word3", "word4"];

    function dragStart(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function dropped(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      var dataEl = document.getElementById(data);
      var test = ev.target.appendChild(dataEl);
      if (ev.target.id == "leftBox") {
        if (data == right[0] || data == right[1]) {
          dataEl.style.color = "green";
        } else {
          dataEl.style.color = "red";
        }
      } else {
        if (data == wrong[0] || data == wrong[1]) {
          dataEl.style.color = "green";
        } else {
          dataEl.style.color = "red";
        }
      }
    }

    function allowDrop(ev) {
      ev.preventDefault();
    }
  </script>
  <br>


  <div id="ndrysho">
    <h4 style="color: #366DAF; text-align:center;">Kliko butonin për të kthyer fjalinë në formën e duhur</h4><br>
    <div style="width:auto; height: auto; background-color: #E1E5F3; font-size: 15px; border:6px solid #5183BE;border-style:ridge; box-shadow:
             0 -5px 7px -5px #143097,
              0 7px 7px -5px #143097,
              7px 0 7px -5px #143097;
              margin-left:25px;
              margin-right:25px;
              text-align:center;
              "><br>
      <p id="demo" style="padding-bottom: 12px;"> &nbsp;&nbsp; Mos mbërrini të paktën 15 minuta para kohës së takimit.</p>
    </div><br>
    <div style="text-align:center;">
      <button onclick="myFunction()" style=" display: inline-block;
      text-decoration: none;
      color:#5390d9;
      border: 2px solid;
      border-radius: 3px;
      background:#fff;
      padding:5px;">Ndrysho</button>
    </div>
  </div>
  <script>
    function myFunction() {
      var str = document.getElementById("demo").innerHTML;
      var res = str.replace(/Mos/g, "Duhet");
      document.getElementById("demo").innerHTML = res;
    }
  </script>


  <br>
  <svg width="30" height="30">
    <circle r="10" cx="15" cy="15" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>
  <svg width="30" height="30">
    <rect x="0" y="0" rx="0" ry="0" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>
  <svg width="30" height="30">
    <circle r="10" cx="15" cy="15" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>
  <canvas id="myCanvas" width="30" height="30" style="border:1px solid grey;"></canvas>
  <svg width="30" height="30">
    <circle r="10" cx="15" cy="15" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>
  <svg width="30" height="30">
    <rect x="0" y="0" rx="0" ry="0" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>
  <svg width="30" height="30">
    <circle r="10" cx="15" cy="15" width="60" height="60" style="fill:#33D5FF ;stroke:black;stroke-width:5;opacity:0.7; margin-left: 25px;" />
  </svg>

  <script>
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    ctx.beginPath();
    ctx.moveTo(10, 0);
    ctx.lineTo(20, 0);
    ctx.lineTo(15, 10);
    ctx.fill();
    ctx.font = "px Arial";
    ctx.fillText("footer", 2, 30);
  </script>





  <footer class="footer">
    <div class="footer-left">
      <img id="imgF" src="images/logo1.png" alt="logo">
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
        <h2>Na Kontakto</h2>

        <ul class="box">
          <li> <a
              href="https://www.google.com/maps/place/Universiteti+i+Prishtin%C3%ABs/@42.6484076,21.1665845,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x13549ec1b5430613:0x76c9353194f18686!2sUniversiteti+i+Prishtin%C3%ABs!8m2!3d42.6484076!4d21.1671317!3m4!1s0x13549ec1b5430613:0x76c9353194f18686!8m2!3d42.6484076!4d21.1671317">Rr.
              "George Bush", Nr.31, 10 000 Prishtinë, Republika e Kosovës</a></li>
          <li> <a href="https://contacts.google.com/">Tel: +38345463922</a> </li>
          <li> <a href="mailto:punaideale@gmail.com">Email: punaideale@gmail.com</a> </li>
        </ul>
      </li>
    </ul>
    <div class="footer-bottom">
      <p>All Rights Reserved By &copy; UP-students 2021</p>
    </div>
  </footer>
</body>

</html>
