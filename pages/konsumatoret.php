<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shërbimet</title>
    <link rel="stylesheet" href="Login.css">
    <script src="https://kit.fontawesome.com/2af1bf6a53.js" crossorigin="anonymous"></script>
    <script src="Login.js"></script>
    <style>
        #sherbime {
            width: 400px;
            height: 60px;
            background-color: rgb(210, 215, 220);
        }
        #title{
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <div id="div-sherbimi" class="form">
            <h1 id="title">Shërbimet</h1>
            <form>
                <div class="input">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <form>
                            <input id="text1" type="text" placeholder="Name">
                        </form>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <form>
                            <input id="email1" type="email" placeholder="Email" autocomplete="off" required>
                        </form>

                    </div>
                    <div class="input-field">
                        <form action="">
                            <textarea id="textarea" name="Textarea" id="sherbime" cols="51" rows="15"
                                placeholder="Pershkruaj..."></textarea>
                        </form>
                        <div class="submit">
                            <button onclick="valido()" type="submit" id="signup">Submit</button>

                        </div>

                    </div>
                    <div class="submit" style="align-items: center; justify-content: center;">
                        <button type="submit" id="signup">Submit</button>

                    </div>

                    <div class="linket">
                        <a href="home.html"
                            style="text-align: center; text-decoration: none; color:rgb(244, 247, 252) ; ">Shko tek ballina!
                        </a>
                    </div>
                    <div class="svg">
                        <svg viewBox="0 0 500 280" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <text style="white-space: pre; fill: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 20.9px;" x="97.189" y="99.432"> </text>
                            <text style="fill: rgb(51, 51, 51); font-family: math; font-size: 30px; stroke-linecap: round; stroke-linejoin: round; white-space: pre; text-decoration: overline solid rgba(0, 0, 0, 0.8);" transform="matrix(1, 0, 0, 1, 1.794254, 5.980861)"><tspan x="174.533" y="189.145" dy="1em">​</tspan><tspan>Libraria Online</tspan></text>
                            <text style="fill: rgb(51, 51, 51); font-family: math; font-size: 30px; white-space: pre;" transform="matrix(1.399598, 0, 0, 1.768674, -203.136322, -206.914444)"><tspan x="280" y="223.834">Grupi 20</tspan><tspan x="232.955" dy="1em">​</tspan></text>
                          </svg>
                    </div>
            </form>
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