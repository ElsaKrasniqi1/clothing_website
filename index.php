<?php session_start() ?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/home.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Ballina</title>
  <script src="https://kit.fontawesome.com/c99733573c.js" crossorigin="anonymous"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
    type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

  <link href="//maxcdn.bootsreapcdn.com/font-awesome/4.1.0//css/font-awesome.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./css/hello.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <style>
    #video {
      position: relative;
      left: 100%;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
  <header class="row nav">
      <div class="name col-lg-3">
        <h5>Libraria Online</h5>

      </div>
      <div class="icons col-lg-9">
        <ul style="list-style: none;">
          <li class="listat">
            <i class="fa fa-solid fa-circle"></i>
            <a style="color:black" href="index.php">Ballina</a>
          </li>

          <li class="listat">
            <i class="fa fa-sharp fa-solid fa-book"></i>
            <a style="color:black" href="./pages/books.php">Librat</a>
          </li>
          <li class="listat">
            <i class="fa fa-solid fa-user"></i>
            <a style="color:black" href="./pages/authors.php">Autorët</a>
          </li>
          <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
            <li class="listat">
            <i class="fa fa-solid fa-user-plus"></i>
            <a style="color:black" href="./pages/dashboard.php">Dashboard</a>
          </li>
          <?php } ?>
          <?php if(isset($_SESSION['role'])){ ?>
            <li style="cursor:pointer" onClick="logout()"  class="listat">
            <i class="fa fa-solid fa-user-plus"></i>
            <a style="color:black">Çkyçu</a>
          </li>
          <?php } else{  ?>
            <li class="listat">
            <i class="fa fa-solid fa-user-plus"></i>
            <a  style="color:black;" href="./pages/signup.php">Kyçu</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </header>
    
    <div id="carouselExampleCaptions" class="carousel slide home" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/magazin1.jpg" class="d-block w-100" alt="foto-1">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/ah1.jpg" class="d-block w-100" alt="foto-2">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/rk2.jpg" class="d-block w-100" alt="foto-3">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="servis home">
      <div class="servis-box">
        <div class="servis-card">
          <i class="fa-solid fa-truck-fast"></i>
          <h3>Post e shpejtë</h3>
          <p>
            Posta arrinë mbrenda 3 deri 4 ditë.
          </p>
        </div>
        <div class="servis-card">
          <i class="fa-solid fa-tags"></i>
          <h3>Kthimi i porosis</h3>
          <p>
            Kthimi i porosis bëhet brenda 7 ditëve.
          </p>
        </div>
        <div class="servis-card">
          <i class="fa-solid fa-lock"></i>
          <h3>Siguri në pagesë</h3>
          <p>
            Më shumë se 100 pagesa të kryera.
          </p>
        </div>
      </div>
    </div>
    <section class="pjesa-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="pjesa-2-img">
              <video width="500" height="500" controls >
                <source src="./images/librarivideo1.mp4" type="video/ogg" />
                Your browser does not support the <video> element.
                </video>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pjesa-2-content">
              <h2>Rreth nesh</h2>
              <p> Libraria Online <abbr title="Emri i libraris">'13'</abbr> filloi punën më 10 dhjetor 2021. Sot në
                librarin tonë gjenden mbi 1000 tituj të
                librave nga autorët tonë dhe të huaj.</p>
            </div>
          </div>
          <p style="font-size:30px; font-family:Aachenn;">Muzikë përfekte për relaksim dhe studim</p>
          <div>

            <audio controls  width="200px" height="200px">
              <source src="./images/audio-1.mp3" type="audio/ogg" />
              Your browser does not support the <audio> element.>
          </div>
          <div>
            <audio controls  width="200px" height="200px">
              <source src="./images/audio-2.mp3" type="audio/wav" />
              Your browser does not support the <audio> element.
          </div>
          <div class="col-md-6">
            <div class="pjesa-2-img" id="video">
              <video width="500" height="500" controls >
                <source src="./images/v10044g50000c7qkisjc77u10f9gmhm0.MP4" type="video/ogg" />
                Your browser does not support the <video> element.
                </video>
            </div>
          </div>
        </div>
    </section>
    <section>
      <div class="reviews">
        <h1>Vlerësimet</h1>

        <div class="review_box">
          <div class="review_card">
            <i class="fas fa-quote-right"></i>
            <div class="card_top">
              <img src="./images/pic-1.png">
            </div>

            <div class="card">
              <h2>Leo Tahiri</h2>
              <p>Më pëlqen të jem në gjendje të shfletoj libra (veçanërisht falë koleksioneve të rekomandimeve të
                titujve të librarive individuale),
                të porosis gjithçka me një hap .Dorëzimi është i përsosur, çmimi është vërtet transparent!</p>

            </div>

            <div class="review_icon">
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
            </div>
          </div>
          <div class="review_card">
            <i class="fas fa-quote-right"></i>
            <div class="card_top">
              <img src="./images/pic-2.png"><img>
            </div>

            <div class="card">
              <h2>Sara Bajgora</h2>
              <p>
                Ju kishit një libër që unë nuk isha në gjendje ta gjeja <mark>"Game of Thrones"</mark> dhe e porosita
                shpejt.
                Libri im mbërriti brenda tre ditësh dhe unë u njoftova se kur u dërgua dhe kur kishte gjasa të
                mbërrinte.
                Jam shume i kenaqur me punen tuaj</p>

            </div>

            <div class="review_icon">
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
            </div>
          </div>
          <div class="review_card">
            <i class="fas fa-quote-right"></i>
            <div class="card_top">
              <img src="./images/pic-3.png">
            </div>

            <div class="card">
              <h2>Amar Halimi</h2>
              <p>Kërkova për 2 libra nga ky dyqan dhe të dy ishin në dispozicion me një çmim të arsyeshëm.
                Problemi i vetëm ishte se etiketa ngjitëse ishte ngjitur në pjesën e përparme të njërit prej librave -
                megjithatë asnjë dëmtim i dukshëm</p>

            </div>

            <div class="review_icon">
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
            </div>
          </div>
          <div class="review_card">
            <i class="fas fa-quote-right"></i>
            <div class="card_top">
              <img src="./images/pic-4.png">
            </div>

            <div class="card">
              <h2>Teuta Mustafa</h2>

              <ol>
                <li>Çmime të volitshme</li>
                <li>Shërbim i shkëlqyeshëm</li>
                <li>Tituj te rinjë</li>
                <li>Rekomandime të titujve</li>
                <li>Kthimi i porosise brenda 7 diteve</li>
                <li>Mberritja e porosise ne kohe</li>
              </ol>

            </div>

            <div class="review_icon">
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star checked" style="width:10%"></span>
              <span class="fas fa-star " style="width:10%"></span>
            </div>
          </div>
        </div>
      </div>
    </section>



    <div style="height: 250px; width: 100%;" class="footer-2">
      <span class="infos">
        <h5 class="title"><b>LIBRARIA ONLINE</b></h5>

        <addres>Rr.Bill Clinton, 28 <br>
          Prishtine 10000 <br>
          Nr.tel +383 49 750 875<br>
          Email:<a href="mailto:name@email.com">librariaonline@email.com</a> <br>
          <a class="sherbimet" href="konsumatoret.html">Shërbimet</a>
        </addres>

      </span>
      <span class="social-medias">
        <a class="link" title="Facebook" href="https://facebook.com">
          <i class="social-medias-logo fa fa-brands fa-facebook"></i>
          <a class="social-medias-text" href="https://facebook.com">Facebook</a>
        </a>
        <a class="link" title="Instagram" href="https://instagram.com">
          <i class="social-medias-logo fa fa-brands fa-instagram"></i>
          <a class="social-medias-text" href="https://instagram.com">Instagram</a>
        </a>
        <a class="link" title="Twitter" href="https://twitter.com">
          <i class="social-medias-logo fa fa-brands fa-twitter"></i>
          <a class="social-medias-text" href="https://twitter.com">Twitter</a>
        </a>
      </span>
      <span>
        <p id="displayDateTime"></p>
      </span>
    </div>
   
  </div>


  
</body>

<script type="text/javascript">
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var date = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' - '+time;
   
  document.getElementById("displayDateTime").innerHTML = dateTime +" - " + daylist[day];
 
  </script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/index.js"></script>
</html>