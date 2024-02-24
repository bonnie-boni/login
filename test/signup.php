<?php 
// checking if one has logged in or not. if not redirect to the login page
session_start();
    include('connection.php');
    include('functions.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //posting values in the table
        $first_name = $_POST["firstname"];
        $last_name = $_POST['lastname'];
        $middle_name = $_POST['middlename'];
        $education = $_POST['Education'];
        $gender = $_POST['Gender'];
        $email = $_POST['email'];
        $instructions = $_POST['instructions'];
        $password = $_POST['Password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //save to the database
            $query = "INSERT INTO users VALUES ('$first_name','$last_name','$middle_name','$education','$gender','$instructions','$password','$email') ";
        }
        else{
            echo "Please enter valid info ...";
        }
    }
?>
<!doctype html>

<html>
    <head>
        <title>
            Sign Up
        </title>

        <!-- linking to the stylesheet -->
        <link rel="stylesheet" href="style.css">
        <style>
            /* body{
                padding: 25px;
                margin: 25px;
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
                width: 55px;
                height: 55px;
                font-size: 20px;
            } */
        body{
            padding: 5px ;
            margin: 15px;
            font-size: 20px;
        }
        .button{
            cursor: pointer;
            color: brown;
            border: 2px solid blueviolet;
            border-radius: 15px;
            align-self: center;
            background-color: rgb(44, 41, 73);
        }
        input{
            width: 25%;
            height: 15%;
            font-size: 20px;
        }
        form{
            border: 2px solid;
            margin: 5px;
            border-radius: 25px;
        }
        </style>
    </head>

    <body>
        
        <form action="signup.php" method="post">
            <h1> <u> Sign Up </u></h1>
        <!-- <fieldset class="wrapper"> -->
            
            <!-- <legend>Sign Up</legend> -->

            <label>First Name :</label>
            <input type="text" name="firstname" placeholder="enter your first name ..." maxlength="20">

            <label>Last Name :</label>
            <input type="text" name="lastname" placeholder="enter your last name ..." maxlength="20"> <br><br>

            <label>Middle Name :</label>
            <input type="text" name="middlename" placeholder="enter your middle name ..." maxlength="20"> 
            
            <label>Email :</label>
            <input type="email" name="email" placeholder="example@gmail.com" maxlength="40"> <br><br>

            <label>level of Education :</label>
            <select name="Education" id="">
                <option value="PHD">PHD</option>
                <option value="Masters">Masters</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Certificate">Certificate</option>
                <option value="Diploma">Diploma</option>
                <option value="Highschool">Highschool</option>
            </select> <br><br>

            <label>Set Password :</label>
            <input type="password" name="Password" maxlength="16"> 

            <label>Confirm Password :</label>
            <input type="password" name="Password" maxlength="16"> <br><br>

            <label> Gender : </label>

            <input type="radio" value="Gender" name="Gender">
            <label> Male </label>

            <input type="radio" value="Gender" name="Gender">
            <label> Female </label>
            
            <input type="radio" value="Gender" name="Gender">
            <label> prefer not say </label> <br><br>

            <input type="radio" name="instructions">i have read the instructions, i agree</label> <br>
            <input type="radio" name="instructions">i have read the instructions, i dont agree</label> <br> <br>

            <input type="submit" value="Sign In" class="button"> <br><br>

            <label for="login">I do have an account <a href="login.html">LogIn</a></label>
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