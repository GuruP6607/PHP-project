<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if (empty($username) && empty($password)) {
        $error = "Username and password are required.";
    }
    elseif (empty($username)) {
        $error = "Username is missing.";
    }
    elseif (empty($password)) {
        $error = "Password is missing.";
    }
    else {
        $error = "Login successful!";
        header("Location: index.php"); 
        exit();
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login-In</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                text-align: center;
                padding: 50px;
            }
            .table1{
                background-color: white;
                padding: 50px;
                padding-top: 20px;
                padding-bottom: 50px;
                border: solid;
                border-radius: 5px;
                border-color: white;
                width: 325px;
                table-layout: fixed;
            }
            .name{
                background-color: white;
                margin-top: 50px;
                padding: 20px;
                border: solid;
                border-radius: 3px;
                border-width: 1px;
                border-color: lightgray;
                margin-bottom: 30px;
            }
            .name:hover{
                cursor:text;
            }
            .pass{
                background-color: white;
                padding: 20px;
                border: solid;
                border-radius: 3px;
                border-width: 1px;
                border-color: lightgray;
                margin-bottom: 30px;
            }
            .pass:hover{
                cursor:text;
            }
            
            .log{
                background-color: lightgreen;
                padding: 20px;
                padding-left: 90px;
                padding-right: 90px;
                border-radius: 3px;
                border-width: 1px;
                border-color: lightgray;
                margin-bottom: 10px;
                
            }
            .log:hover{
                cursor: pointer;
                background-color: rgba(61, 248, 61, 0.67);
            }

        </style>

    </head>

    

    <body bgcolor="lightblue";>
        <center> 
            <h1>Intenship Entry</h1>
            <form class="form1" action="login.php" method= "POST";">
                <table class="table1">
                    <tr>
                        <td> <input class="name" type="text" name="username" placeholder= "Name"> </td>
                    </tr>
                    
                    <tr>
                        <td> <input class="pass" type="password" name="password" placeholder="Password"></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="log-div">
                                <button type="submit" class="log">Login </button></td> 
                            </div>
                    
                    </tr>
                    <tr>
                        <td><center>
                            <?php
                                 if (!empty($error)) 
                                 {
                                    echo "<p style='color:red; overflow-wrap: break-word; word-wrap: break-word;'>$error</p>";

                                 }
                            ?>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        
    </body>
</html>




