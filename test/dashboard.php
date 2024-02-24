<?php
// checking if one has logged in or not. if not redirect to the login page
session_start();
    include('connection.php');
    include('login.php');

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <i>  </i>
    <style>
        i{
            width: 16px;
        }
    </style>
</head>
<body>
    <h1> <u> Name Of The Chemist </u> </h1>

    <div class="bar">
        <div class="list">
            <div>
                <a href="restocking_page.php">  <input type="button" value="Restocking Page" class="button"> </a>
            </div>
            <div>
                <a href="assistant.phprestocking_page.php">  <input type="button" value="Assistant" class="button"> </a>
            </div>
            <div>
                <a href="login.phprestocking_page.php">  <input type="button" value="Sign Out" class="button"> </a>
            </div>
            <div>
                <input type="search" placeholder="medicine name/category ..." class="search">
            </div>
            <div>
                <input type="button" placeholder=" Search" class="search" value="search">
            </div>

        </div>
    </div>

    <div class="wrapper">
            
             <form action="Post">

                <table border="1px solid " width="100px" height="15px">

                    <div class="heading">
                        <caption> Drugs Available In The Chemist Today </caption>
                    </div>

                    <tr>
                        <th> Date </th>
                        <th> Drug Name </th>
                        <th> Drug Type </th>
                        <th> Expiry Date </th>
                        <th> Quantity </th>
                    </tr>
                    <tr>
                        <td> <input type="date" required> </td>
                        <td><input type="text" placeholder="ie. panadol"></td>
                        <td><input type="text" placeholder="ie asprine"></td>
                        <td><input type="date" required></td>
                        <td><input type="number" max="100" placeholder="maximum is 100"></td>
                    </tr>
                    
                    <tr>
                        <td inputmode="Date" aria-placeholder="01/01/2000"> <input type="date"> </td>
                        <td><input type="text" placeholder="ie. panadol"></td>
                        <td><input type="text" placeholder="ie asprine"></td>
                        <td><input type="date"></td>
                        <td><input type="number" max="100" placeholder="maximum is 100"></td>
                    </tr>
                </table> 
                
                        <br><br><br>
            
            <div class="Issued">

                <code> Sudo apt update &&  sudo apt upgrade --y </code> <br><br>
                <canvas></canvas>
                <map></map>

<!-- table form the database -->
<?php include "fetch_data.php" ?>

                <table border="1px solid " width="100px" height="15px">
                        <div class="heading">
                            <caption> Drugs Issued </caption>
                        </div>
    
                        <tr>
                            <th> Date </th>
                            <th> Drug Name </th>
                            <th> Quantity </th>
                        </tr>
                        <tr>
                            <td> <input type="date" required> </td>
                            <td><input type="text" placeholder="ie. panadol"></td>
                            <td><input type="number" max="100" placeholder="maximum is 30"></td>
                        </tr>
                        
                        <tr>
                            <td inputmode="Date" aria-placeholder="01/01/2000"> <input type="date"> </td>
                            <td><input type="text" placeholder="ie. panadol"></td>
                            <td><input type="number" max="100" placeholder="maximum is 30"></td>
                        </tr>
                    </table> <br><br>

                    <input type="submit" class="submition">
            </div>
                    
                    
            </form>
        </div>

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