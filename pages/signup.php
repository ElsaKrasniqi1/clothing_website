<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sing in and Sing up form </title>
    <link rel="stylesheet" href="../css/Login.css">
    <script src="https://kit.fontawesome.com/2af1bf6a53.js" crossorigin="anonymous"></script>
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
        <form  action="../php/register.php" method="post"   enctype="multipart/form-data" onsubmit="return handleRegister()">
            <div class="input">
                <div class="input-field" id="nameField">
                    <i class="fa-solid fa-user"></i>
                        <input  name="usernameRegister" id="text" type="text" placeholder="Username" class="usernameInput">
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                        <input name="emailRegister" id="email" type="email" placeholder="Email" autocomplete="off" class="emailInput">

                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                        <input name="passwordRegister" id="password" type="password" placeholder="Password" class="passwordInput">

                </div>
                <div class="input-field"><i class="fas fa-image"></i>   <input name="image" type="file" class="file r"  /></div>
               
                <p class="signupMessage">Forgot password <a href="#">Click Here!</a></p>

            </div>
            <div class="submit">
                <button  type="submit" id="signup">Register</button>
                <a href="./login.php"  id="signin" class="disable">Login</a>

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