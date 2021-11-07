<!--connection to database-->
<?php include 'db_connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <!--SIGN UP-->
    <h1>Please enter details to sign up </h1>
    <form action="signup.php" method="post"><br>
     <input type="text" name="name" placeholder="Name" required /><br>
     <input type="text" name="username" placeholder="Username" required/><br>
     <input type="text" name="email" placeholer="Email" required/><br>
     <input type="password" name="password" placeholder="password" required/><br>
     <input type="submit" name="submit" value="submit"/>
        
    </form>

    <!--LOGIN -->
    <h1>Pleaser enter details to log in</h1>
    <form action="login.php" method="post"><br>
    <input type="text" name="username"  placeholder="Username" placeholder="username"><br>
    <input type="password" name="password" placeholder="Password" /><br>
    <input type="checkbox" name="remember" value="1">Remember me <br>
    <input type="submit" name="submit" value="submit"/>
        
    </form>
</body>
</html>