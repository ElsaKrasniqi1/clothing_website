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
                    <a class="kategori text-muted" href="books.html">Më të lexuarit</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/seShepjti.html">Më të rinjë</a>
                </div>

                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/shqip.html">Shqip</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/Novele.html">Novelë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/aventure.html">Aventurë</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/mister.html">Mister</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/krim.html">Krim</a>
                </div>
                <div class="row-a">
                    <a class="kategori text-muted" href="./booksCategory/fantazi.html">Fantazi</a>
                    <div class="row-a">
                        <a class="kategori text-muted" href="./OnlineLibrary-main/addBook.php">SHTO NJE LIBER</a>
                    
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card novel">
                    <img src="../images/Babel .png" alt="Libri 'Babel' nga R. F. Kuang">
                    <div class="padding card-title">
                        <h5>Babel</h5>
                        <p>Autori: <i><u>R. F. Kuang</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>13.49 Eur</h5>
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia1">11</p>
                        <p class="quantity sold" id="soldText1"></p>
                        <button type="button" onclick="addToCard1()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card novel">
                    <img src="../images/honey and spice.png" alt="Libri 'Honey and Spice' nga Bolu Babalola">
                    <div class="padding card-title">
                        <h5>Honey and Spice</h5>
                        <p>Autori: <i><u>Bolu Babalola</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>15.99 Eur</h5>
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia2">10</p>
                        <p class="quantity sold" id="soldText2"></p>
                        <button type="button" onclick="addToCard2()" class="btn btn-warning">Shto në shportë</button>
                    </div>
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
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia3">7</p>
                        <p class="quantity sold" id="soldText3"></p>
                        <button type="button" onclick="addToCard3()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="booksrow2 row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="card novel">
                    <img src="../images/the fault in our stars.jpg" alt="Libri 'The fault in our stars' nga John Green">
                    <div class="padding card-title">
                        <h5>The fault in our stars</h5>
                        <p>Autori: <i><u>John Green</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>7.99 Eur</h5>
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia4">12</p>
                        <p class="quantity sold" id="soldText4"></p>
                        <button type="button" id="add4" onclick="addToCard4()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card aventure">
                    <img src="../images/the call of wild.jpg" alt="Libri 'The Call of the Wild' nga Bolu Babalola">
                    <div class="padding card-title">
                        <h5>The Call of the Wild</h5>
                        <p>Autori: <i><u>Jack London</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>12.99 Eur</h5>
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia5">4</p>
                        <p id="soldText5" class="quantity sold"></p>
                        <button type="button" id="add5" onclick="addToCard5()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class=" card fantazi">
                    <img src="../images/goth.jpg" alt="Libri 'Game of Thrones' nga Arthur Conan Doyle">
                    <div class="padding card-title">
                        <h5>Game of Thrones</h5>
                        <p>Autori: <i><u>Gorge R. R. Martin</u></i></p>
                    </div>
                    <div class="padding card-text">
                        <h5>12.75 Eur</h5>
                        <p class="quantity">Sasia: </p>
                        <p class="quantity sas" id="sasia6">6</p>
                        <p class="quantity sold" id="soldText6"></p>
                        <button type="button" onclick="addToCard6()" class="btn btn-warning">Shto në shportë</button>
                    </div>
                </div>
            </div>
        </div>
   <?php include "../includes/footer.php" ?>
       
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