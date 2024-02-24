<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Notifier</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1> <u> Restocking Page </u> </h1>

    <div class="list">
        <div>
            <a href="dashboard.php">  <input type="button" value="DashBord" class="button"> </a>
        </div>
        <div>
            <a href="assiatant.php">  <input type="button" value="Assistant" class="button"> </a>
        </div>
        <div>
            <a href="login.php">  <input type="button" value="Sign Out" class="button"> </a>
        </div>
    </div>

    <div class="wrapper">
            
             <form method="Post">

                <table border="1px solid " width="100px" height="15px">

                    <div class="heading">
                        <caption> Restocking </caption>
                    </div>

                    <tr>
                        <th> Date </th>
                        <th> Drug Name </th>
                        <th> Drug Type </th>
                        <th> Expiry Date </th>
                        <th> Quantity </th>
                    </tr>
                    <tr>
                        <td><input type="date" required> </td>
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
                </table> <br><br>
                        <input type="submit" class="submition">
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