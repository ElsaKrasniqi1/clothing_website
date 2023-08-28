<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../books2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../books.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row nav">
            <div class="name col-lg-3">
                <h5>Libraria Online</h5>
            </div>
            <div class="icons col-lg-9">
                <ul style="list-style: none;">
                    <li class="listat">
                        <i class="fa fa-solid fa-circle"></i>
                        <a href="../home.html">Ballina</a>
                    </li>

                    <li class="listat">
                        <i class="fa fa-sharp fa-solid fa-book"></i>
                        <a href="../books.html">Librat</a>
                    </li>
                    <li class="listat">
                        <i class="fa fa-solid fa-user"></i>
                        <a href="../authors.html">Autorët</a>
                    </li>
                    <li class="listat">
                        <i class="fa fa-solid fa-user-plus"></i>
                        <a href="../Login_form.html">Kyçu</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row search-bar">
            <div class="col-lg-12">
                <input type="text" class="input-text" placeholder="Search">
                <button type="submit" class="submit-btn"><i class="fa fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="row booksrow1">
            <div class="selection col-lg-3">
                <div class="row-a">
                    <a class="kategori text-muted" href="../books.html">Më të lexuarit</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="seShepjti.html">Më të rinjë</a>
                </div>

                <div class="row-a">
                    <a class="kategori text-muted" href="shqip.html">Shqip</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="Novele.html">Novelë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="aventure.html">Aventurë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="mister.html">Mister</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="krim.html">Krim</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="fantazi.html">Fantazi</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mistery drama crime">
                    <img src="../images/sherlock.png" alt="Libri 'Sherock Holmes' nga Arthur Conan Doyle">
                    <div class=" padding card-title">
                        <h5>Sherlock Holmes</h5>
                        <p>Autori: <i><u>Arthur Conan Doyle</u></i></p>
                    </div>
                    <div class=" padding card-text">
                        <h5>22.99 Eur</h5>
                        <p class="quantity" >Sasia: </p>
                        <p class="quantity sas"  id="sasia3">7</p>
                        <p class="quantity sold" id="soldText3"></p>
                        <button type="button" onclick="addToCard3()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="height: 250px; width: 100%; top: 50vh;" class="footer">
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
</html>