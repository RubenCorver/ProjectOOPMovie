<?php 
session_start();
require_once "connect-login.php";


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: gar-menu.php");
}     
            

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = $conn->prepare("
                        SELECT  User, Pass, Admin
                        FROM    loginform
                        WHERE   User = :username
                        AND     Pass = :password
                        AND     Admin = :code
    ");
    
    $sql->execute([
                "username" => $username,
                "password" => $password,
                "code"     => 1
    ]);
    
    $numRows = $sql->rowCount();
    
    if($numRows == 1)
    {
        $_SESSION['loggedin'] = true;   
        header("Location: gar-menu.php");
    }
    if ($code == 0)
    {
        echo ("alleen voor admins");
    }
    else
    {
        header("Location: gar-menuK.php"); 
    }     
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>⛄Login⛄</title>
	<link rel="stylesheet" a href="css/Login.css">
</head>
<body>
	<div class="container">
	<img src="img/login.png"/>
		<form action="" method="POST">
			<div class="form-input">
				<input type="text" name="username" placeholder="Username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>