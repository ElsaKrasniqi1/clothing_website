<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sing in and Sing up form </title>
    <link rel="stylesheet" href="../css/Login.css">
    <script src="https://kit.fontawesome.com/2af1bf6a53.js" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
    <style>
        label {
            display: block;
            border: solid 2px #894fe7;
            width: 130px;
            height: 30px;
            margin-top: 10px;
            color: #894fe7;
            text-align: center;
            line-height: 30px;
            border-radius: 10px;
            font-size: 15px;
        }


        input[type=checkbox] {
            display: none;
        }


        input:checked+label:before {
            content: "✓ ";
        }


        input:checked+label {
            border: solid 2px purple;
            color: purple;
        }
        #title{
            color: white;
        }
        #rememberMe{
            position: relative;
            left: 30%;
        }
        #rememberMe:hover{
            color: white;
            border: 1.5px solid white;
        }
    </style>
</head>

<body>

    <div class="form">
        <h1 id="title">Sign Up</h1>
        <form  action="../php/login.php" method="post" onsubmit="return handleLogin()">
            <div class="input">
                
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                        <input name="emailLogin" class="emailInput" id="email" type="email" placeholder="Email" autocomplete="off" />

                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                        <input name="passwordLogin" class="passwordInput" id="password" type="password" placeholder="Password"/>

                </div>
               
                <p class="signupMessage">Forgot password <a href="#">Click Here!</a></p>

            </div>
            <div class="submit">
                <button  type="submit" id="signup">Login</button>
                <a href="./signup.php"  id="signin" class="disable">Register</a>

            </div>

       
            <div class="linket">
                <a href="../index.php" style="text-align: center; text-decoration: none; color:rgb(244, 247, 252) ; ">Shko
                    tek ballina!</a>

            </div>

        </form>
    </div>

</body>
<script src="../js/Signup.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>