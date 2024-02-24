<!doctype html>
<html>
    <head>
        <title>
            drugs record notifier
        </title>
        <link rel="stylesheet" href="style.css">

        <style>
            /* form{
                padding: 50px;
                margin: 50px;
            }
            
            body{
                padding: 25px;
                margin: 25px;
                text-align: center;
            }
            .wrapper {
                display:inline;
                border: 4px solid ;
            }
            .wrapper input{
                color: brown;
                width: fit-content;
                height: 25px;
            }
            .submit{
                cursor: pointer;
                padding: 5px;
                margin: 5px;
                width: 50%;
                height: 50%;
                font-size: 20px;
            } */
        body{
            display: inline;
        }

        .button{
            cursor: pointer;
            color: brown;
            border: 2px solid blueviolet;
            border-radius: 15%;
            background-color: rgb(44, 41, 73);
        }
        input{
            height: 15%;
            font-size: 20px;
        }
        .wrapper{
            display: inline;

        }
        form{
            border: 2px solid;
            border-radius: 25px;
            text-align: center;
        }

        </style>
    </head>

    <body>
        <form method="post">
            <H1>LogIn</H1>
            <!-- <fieldset class="wrapper"> -->
                <!-- <legend >Log In</legend> -->
                <label>Email/UserName :</label>
                <input type="text" placeholder="Enter your email or UserName "> <br><br>

                <label>Password: </label>
                <input type="password" placeholder="Enter your Password"><br><br>
                
                <input class="button" type="Submit" value="Submit" href="dashboard.php"> <br><br>

                <label>I dont have an account, <a href="signup.php">Sign up </a></label> <br><br>

                <a href="forgotpass.php">Forgot password</a>

            <!-- </fieldset> -->
        </form>

        <footer>
            <div> <label for="contacts"> You can reach Us via </label> <br><br> </div>

            <div class="fota">
                <div>
                    <img src="123.jpg" alt="George" width="150px"> <br>
                    Email : <a href="xanensismo@gmail.com">xanensismo@gmail.com</a> <br>
                    Phone : <a href="0782009821">0782009821</a> <br>
                    LinkedIn : <a href="mboniin">Mboni Bonnie</a>
                </div>
                <div>
                    Email : <a href="xanensismo@gmail.com">xanensismo@gmail.com</a> <br>
                    Phone : <a href="0782009821">0782009821</a> <br>
                    LinkedIn : <a href="mboniin">Mboni Bonnie</a> <br>
                    <img src="123.jpg" alt="George" width="150px"> <br>
                </div>
            </div>
        </footer>

    </body>
</html>