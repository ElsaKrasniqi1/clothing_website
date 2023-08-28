<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Më të rinjët</title>
    <link rel="stylesheet" href="../seShepjti.css">
    <link rel="stylesheet" href="../books.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-width: 5px;
            border-spacing: 30px;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 800px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width: 40px;
            margin-top: auto;
            position: relative;
            left: 5%;
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;

        }

        .styled-table th,
        .styled-table td:hover {
            font-size: 15px;
            color: rgb(116, 146, 194);
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
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
            <table class="styled-table">
                <tr>
                    <td><b>Autori</b></td>
                    <td><b>Titulli</b></td>
                    <td><b>Çmimi</b></td>
                </tr>
                <tr>
                    <td>Ismail Kadare</td>
                    <td>Keshtjella</td>
                    <td>10.99</td>
                </tr>

                <tr>
                    <td>Daniel Goleman</td>
                    <td>Inteligjenca Sociale</td>
                    <td>5.99</td>
                </tr>
                <tr class="active-row">
                    <td colspan="2">James Clear</td>
                    <td>Se shpejti: Shprehje atomike</td>


                </tr>
            </table>
            <div>
            <label for="browser" >Lloji i libirit qe parapelqeni</label>
            <input list="browsers" name="browser" id="browser" style="padding-left:30px">

            <datalist id="browsers">
                <option value="Novele">
                <option value="Aventure">
                <option value="Mister">
                <option value="Krim">
                <option value="Fantazi">
            </datalist>
            </div>
            <div>
                <div style="height: 250px; width: 100%;" class="footer1">
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
                            <a class="social-medias-text" href="https://facebook.com"> Facebook</a>
                        </a>
                        <a title="Instagram" href="https://instagram.com">
                            <i class="fa fa-brands fa-instagram"></i>
                            <a class="social-medias-text" href="https://instagram.com"> Instagram</a>
                        </a>
                        <a title="Twitter" href="https://twitter.com">
                            <i class="fa fa-brands fa-twitter"></i>
                            <a class="social-medias-text" href="https://twitter.com"> Twitter</a>
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
    var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
    var date = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date + ' - ' + time;

    document.getElementById("displayDateTime").innerHTML = dateTime + " - " + daylist[day];

</script>

</html>