
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Puna ime ideale</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/projekti.css">
  <script src="jquery-3.5.1.min.js"></script>

</head>
<style media="screen">
  .svg-wrapper {
    height: 60px;
    margin: 0 auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    width: 320px;
    margin-top: 50px;
  }

  .shape {
    fill: transparent;
    stroke-dasharray: 140 540;
    stroke-dashoffset: -474;
    stroke-width: 8px;
    stroke: #006A97;
  }

  .text {
    color: #fff;
    font-family: 'sans-serif';
    font-size: 22px;
    letter-spacing: 8px;
    line-height: 32px;
    position: relative;
    top: -48px;
    text-align: center;
  }

  @keyframes draw {
    0% {
      stroke-dasharray: 140 540;
      stroke-dashoffset: -474;
      stroke-width: 8px;
    }

    100% {
      stroke-dasharray: 760;
      stroke-dashoffset: 0;
      stroke-width: 2px;
    }
  }

  .svg-wrapper:hover .shape {
    -webkit-animation: 0.5s draw linear forwards;
    animation: 0.5s draw linear forwards;
  }
</style>

<body>

<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo">Puna ime ideale</div>
    <ul class="links">
      <li><a href="index.php">Kryefaqja</a></li>
      <li><a href="cv.html" target="_blank">Krijo CV</a></li>
      <li><a href="quiz.php" target="_blank">Kuiz</a></li>
      <li><a href="shpalljePune.php">Shpallje</a></li>
      <li><a href="keshilla.php">K&eumlshilla</a></li>
      <li><a href="#aboutus">Rreth nesh</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="profile.php">Profili</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>


  <div class="slider">
    <div class="myslide fade">
      <div class="txt">
        <h1>Krijo CV</h1>
        <p>Krijo CV-n t&eumlnde tani</p>
      </div>
      <img src="img/CV.jpg" style="width: 100%; height: 100%;">
    </div>
    <div class="myslide fade">
      <div class="txt">
        <h1>Kuiz</h1>
        <p>Luaj kuiz<br>q&euml t&euml shoh&eumlsh se cili profesion &eumlsht&euml p&eumlr ty</p>
      </div>
      <img src="img/quiz.jpg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
      <div class="txt">
        <h1>Shpallje</h1>
        <p>K&eumlrkon pun&euml<br>Shiko shpalljet</p>
      </div>
      <img src="img/img3.jpg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
      <div class="txt">
        <h1>K&eumlshilla</h1>
        <p>Nuk ke punuar asnj&eumlher&euml<br>M&eumlso shum&euml??ka rreth intervistave t&euml pun&eumls etj...</p>
      </div>
      <img src="img/img1.jpg" style="width: 100%; height: 100%;">
    </div>
   
<div class="myslide fade">
      <div class="txt">
        <h1>Log in</h1>
        <p>Kyqu !<br>M&eumlso shum&euml??ka rreth intervistave t&euml pun&eumls etj...</p>
      </div>
      <img src="img/img1.jpg" style="width: 100%; height: 100%;">
    </div>
<div class="myslide fade">
      <div class="txt">
        <h1>Profili</h1>
        <p>Shiko profilin tuaj!<br>M&eumlso shum&euml??ka rreth intervistave t&euml pun&eumls etj...</p>
      </div>
      <img src="img/img1.jpg" style="width: 100%; height: 100%;">
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>
  </div>
  <br>

  <article class="Profesionet">
    <h1 id="ph1">Profesionet m&euml t&euml k&eumlrkuara n&euml Kosov&euml</h1>
    <article class="puna1">
      <h2 id="punet">Industria e p??rpunimit t?? drurit</h2> <br>
      <?php
        $myfile = fopen("IPDrurit.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("IPDrurit.txt"));
        fclose($myfile);
      ?>
      <br><br>
    </article>

    <article class="puna1">
      <h2 id="punet">Tekonlogjia Informative</h2><br>
        <?php
        $myfile = fopen("IT.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("IT.txt"));
        fclose($myfile);
      ?>
      <br><br>
    </article>

    <article class="puna1">
      <h2 id="punet">Agrobiznesi</h2>
      <br>
      <?php
        $myfile = fopen("Agrobiznesi.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("Agrobiznesi.txt"));
        fclose($myfile);
      ?>
      <br><br>
    </article>

    <article class="puna1">
      <h2 id="punet">Turizmi</h2><br>
      <?php
        $myfile = fopen("Turizmi.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("Turizmi.txt"));
        fclose($myfile);
      ?>
      <br><br>
    </article>

    <article class="puna1">
      <h2 id="punet">Pun??t teknike</h2><br>
      <?php
        $myfile = fopen("PunetTeknike.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("PunetTeknike.txt"));
        fclose($myfile);
      ?>
      <br><br>
    </article>

  </article>

  <div class="statistika">
    <table class="styled-table">
      <thead>
        <th>Statistika rreth pagave n&euml Kosov&euml</th>
      </thead>
      <tbody>
        <tr>
          <td>Statistika rreth pagave n&euml Kosov&euml baz&euml: profesionit, shkall&eumls arsimore etj. <br> (ME R&EumlND&EumlSI : t&euml gjitha statistikat jan&euml marr&euml nga https://www.averagesalarysurvey.com/kosovo )</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table11" style="overflow-x:auto;">
    <table class="styled-table">
      <thead>
        <tr>
          <th>Profesionet</th>
          <th>Paga mesatare (EUR)</th>
          <th>Paga mesatare (USD)</th>
          <th>Salary entries</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Doktor</td>
          <td>6,133</td>
          <td>6,643</td>
          <td>03</td>
        </tr>
        <tr>
          <td>Menaxher i resurseve humane</td>
          <td>48,000</td>
          <td>56,590</td>
          <td>02</td>
        </tr>
        <tr>
          <td>Menaxher i IT</td>
          <td>45,000</td>
          <td>54,335</td>
          <td>02</td>

        </tr>
        <tr>
          <td>Menaxher Inxhinierk</td>
          <td>38,300</td>
          <td>46,245</td>
          <td>02</td>
        </tr>
        <tr>
          <td>Zhvillues(Developer) Kryesor</td>
          <td>24,200</td>
          <td>32,893</td>
          <td>02</td>
        </tr>

        <tr>
          <td>Arkitekt</td>
          <td>18,00</td>
          <td>21,827</td>
          <td>02</td>
        </tr>

        <tr>
          <td>Koordinator i IT</td>
          <td>16,500</td>
          <td>18,299</td>
          <td>02</td>
        </tr>

        <tr>
          <td>Analist i financave</td>
          <td>12,780</td>
          <td>14,199</td>
          <td>02</td>
        </tr>

        <tr>
          <td>Menaxher projektesh</td>
          <td>11,000</td>
          <td>11,819</td>
          <td>02</td>
        </tr>

        <tr>
          <td>Pun&eumltor nd&eumlrtimi</td>
          <td>24,200</td>
          <td>32,893</td>
          <td>02</td>
        </tr>

      </tbody>
    </table>
  </div>
  <div class="tabela22" style="overflow-x:auto;">


    <table class="styled-table">
      <thead>
        <tr>
          <th>Shkalla e shkollimit</th>
          <th>Paga mesatare(EUR)</th>
          <th>Paga mesatare(USD)</th>
          <th>Salary entries</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Doktoratura</td>
          <td>36,666</td>
          <td>46,802</td>
          <td>03</td>
        </tr>

        <tr>
          <td>Master</td>
          <td>22,850</td>
          <td>27,381</td>
          <td>20</td>
        </tr>

        <tr>
          <td>Bachelor</td>
          <td>28,346</td>
          <td>33,251</td>
          <td>30</td>
        </tr>

        <tr>
          <td>Kolegje private</td>
          <td>12,500</td>
          <td>15,473</td>
          <td>05</td>
        </tr>

        <tr>
          <td>Shkolla e mesme</td>
          <td>21,090</td>
          <td>23,693</td>
          <td>05</td>
        </tr>

        <tr>
          <td>Posht&euml Sh.M</td>
          <td>21,600</td>
          <td>23,208</td>
          <td>01</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="buttonFS">
    <button type="button" id="buttonF">Fsheh tabelat</button>
    <button type="button" id="buttonS">Shfaq tabelat</button>
  </div>

    <script>
    $(document).ready(function() {
      $("#buttonF").click(function() {
        $(".styled-table").hide("slow");
      });
      $("#buttonS").click(function() {
        $(".styled-table").show("slow");
      });
    });
  </script>


  <script>
    $(document).ready(function() {
      $(".buttonFS").hover(function() {
        $(this).animate({
          opacity: '0.8'
        });

      });
    });
  </script>




  <script src="projekti.js"></script>

  <section id="aboutus">
    <div class="svg-wrapper">
      <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
        <rect class="shape" height="60" width="320" />
      </svg>
      <div class="text">Ekipi jon&euml</div>
    </div>
    <div class="Row">
      <div class="profili">
        <h4>Florentin?? <br> D??rmaku</h4>

        <img src="img/antari2.jpg" alt="">
        <div class="socials2">
          <a href="https://www.facebook.com/FlorentineDermaku"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/florentinadermaku/"><i class="fa fa-instagram"></i></a>
          <a href="mailto:florentin.dermaku@student.uni-pr.edu"><i class="fa fa-google"></i></a>
        </div>

      </div>


      <div class="profili">
        <h4>Festina <br> Gashi</h4>

        <img src="img/antari2.jpg" alt="">
        <div class="socials2">
          <a href="https://www.facebook.com/festina.gashi.35"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/festina.g/"><i class="fa fa-instagram"></i></a>
          <a href="mailto:festina.gashi6@student.uni-pr.edu"><i class="fa fa-google"></i></a>
        </div>

      </div>

      <div class="profili">
        <h4>Gentiana <br> Mejzini</h4>
        <img src="img/antari2.jpg" alt="">
        <div class="socials2">
          <a href="https://www.facebook.com/gentiana.mejzini.1"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/gentianamejzini/"><i class="fa fa-instagram"></i></a>
          <a href="mailto:gentiana.mejzini@student.uni-pr.edu"><i class="fa fa-google"></i></a>
        </div>

      </div>

      <div class="profili">
        <h4>Gentiana <br> Shabani</h4>
        <img src="img/antari2.jpg" alt="">
        <div class="socials2">
          <a href="https://www.facebook.com/gentiana.shabani.733"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/gentianashabani02/"><i class="fa fa-instagram"></i></a>
          <a href="mailto:gentiana.shabani3@student.uni-pr.edu"><i class="fa fa-google"></i></a>
        </div>

      </div>
    </div>
  </section>

  <div class="kontakti">
    <form action="kontakto.php">
      <input type="submit" value="Na kontaktoni" id="kontaktiInput" />
    </form>
  </div>




  <canvas id="Canvas1" width="100%" height="5px"></canvas>
  <script>
    var canvas = document.getElementById('Canvas1');
    var context = canvas.getContext('2d');
    context.rect(0, 0, canvas.width, canvas.height);
    var grd = context.createRadialGradient(238, 50, 10, 238, 50, 300);
    grd.addColorStop(0, '#8ED6FF');
    grd.addColorStop(1, '#004CB3');
    context.fillStyle = grd;
    context.fill();
  </script>


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
          <li> <a href="login.php">Login</a> </li>
        </ul>
      </li>


      <li class="features">
        <h2>T&euml dh&eumlna</h2>

        <ul class="box">
          <li> <a
              href="https://www.google.com/maps/place/Universiteti+i+Prishtin%C3%ABs/@42.6484076,21.1665845,19z/data=!3m1!4b1!4m12!1m6!3m5!1s0x13549ec1b5430613:0x76c9353194f18686!2sUniversiteti+i+Prishtin%C3%ABs!8m2!3d42.6484076!4d21.1671317!3m4!1s0x13549ec1b5430613:0x76c9353194f18686!8m2!3d42.6484076!4d21.1671317">Rr.
              "George Bush", Nr.31, 10 000 Prishtin??, Republika e Kosov??s</a></li>
          <li> <a href="https://contacts.google.com/">Tel: +38345463922</a></li>
          <li><a href="mailto:punaideale@gmail.com">Email: punaideale@gmail.com</a></li>

        </ul>
      </li>

    </ul>
    <div class="footer-bottom">
      <p>All Rights Reserved By &copy; UP-students 2021</p>
    </div>
  </footer>

  <script type="text/javascript">
    var currentTime = new Date().getHours();
    if (document.body) {
      if (6 <= currentTime && currentTime < 17) {
        document.body.background = "https://webgradients.com/public/webgradients_png/030%20Happy%20Fisher.png";
      } else {
        document.body.background =
          "https://wallpapercave.com/wp/wp3006038.png"
      }
    }
  </script>


  <script type="text/javascript">
    sessionStorage.setItem('UEB i realizuar nga', 'Studentet')
  </script>


</body>

</html>
