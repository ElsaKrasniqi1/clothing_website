<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/books.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/books.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Header is here -->
    <?php include '../includes/header.php'?>
        <div class="row search-bar">
            <div class="col-lg-12">
                <input type="text" class="input-text" placeholder="Search">
                
                <button type="submit" class="submit-btn"><i class="fa fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="row booksrow1">
            <div class="selection col-lg-3">
                <div class="row-a">
                    <a class="kategori text-muted" href="../pages/books.php">Më të lexuarit</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/seShepjti.php">Më të rinjë</a>
                </div>

                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/shqip.php">Shqip</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/Novele.php">Novelë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/aventure.php">Aventurë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/mister.php">Mister</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/krim.php">Krim</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../booksCategory/fantazi.php">Fantazi</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="../php/addbook.php">Shto nje liber</a>
                </div>
           
</div>
            <div class="col-lg-3">
                <div class="card novel">
                    <img src="../images/9781529094978.webp" alt="Libri 'The Murders at Fleat House' nga Lucinda Riley">
                    <div class="padding card-title">
                        <h5 style="font-size: 16px;">The Murders at Fleat House</h5>
                        <p>Autori: <i><u>Lucinda Riley</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>12.99 Eur</h5>
                        <p class="quantity" >Sasia: </p>
                        <p class="quantity sas" id="sasia1">6</p>
                        <p class="quantity sold" id="soldText1"></p>
                        <button type="button" onclick="addToCard1()" class="btn btn-warning" href="#">Shto në shportë</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card histori">
                    <img src="../images/9781529070514.webp" alt="Libri 'The Sleeping and the Dead' nga Ann Cleeves">
                    <div class="padding card-title">
                        <h5 style="font-size: 16px;">The Sleeping and the Dead</h5>
                        <p>Autori: <i><u>Ann Cleeves</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>16.99 Eur</h5>
                        <p class="quantity" >Sasia: </p>
                        <p class="quantity sas" id="sasia2">10</p>
                        <p class="quantity sold" id="soldText2"></p>
                        <button type="button" onclick="addToCard2()" class="btn btn-warning" href="#">Shto në shportë</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card histori">
                    <img src="../images/9781529080261.webp" alt="Libri 'Dirt Town' nga Hayley Scrivenor">
                    <div class="padding card-title">
                        <h5>Dirt Town</h5>
                        <p>Autori: <i><u>Hayley Scrivenor</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>13.99 Eur</h5>
                        <p class="quantity" >Sasia: </p>
                        <p class="quantity sas" id="sasia3">9</p>
                        <p class="quantity sold" id="soldText3"></p>
                        <button type="button" onclick="addToCard3()" class="btn btn-warning" href="#">Shto në shportë</button>
                    </div>
                </div>
            </div>
        <div style="height: 250px; width: 100% ;" class="footer">
            <span class="infos">
                <h5 class="title"><b>LIBRARIA ONLINE</b></h5>
                <p>
                    Rr.Bill Clinton, 28 <br>
                    Prishtine 10000 <br>
                    Nr.tel +383 49 750 875 <br>
                    Email:<a href="mailto:name@email.com">librariaonline@email.com</a> <br>
                    <a class="sherbimet" href="../konsumatoret.html">Shërbimet</a>
                </p>
            </span>
            <span class="social-medias">
                <a title="Facebook" href="https://facebook.com">
                    <i class="fa fa-brands fa-facebook"></i>
                    <a class="social-medias-text" href="https://facebook.com">  Facebook</a>
                </a>
                <a title="Instagram" href="https://instagram.com">
                    <i class="fa fa-brands fa-instagram"></i>
                    <a class="social-medias-text" href="https://instagram.com">  Instagram</a>
                </a>
                <a title="Twitter" href="https://twitter.com">
                    <i class="fa fa-brands fa-twitter"></i>
                    <a class="social-medias-text" href="https://twitter.com">  Twitter</a>
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
</html>