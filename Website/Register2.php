<!DOCTYPE html>
<html>
        <body>
<?php
            session_start();
            print $_POST["username"];
            print $_POST["password"];
            $iduser = NULL;
            $username = $_POST["username"];
            $password = $_POST["password"];
        
            require_once "connect.php";
            
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
            
            if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
                
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);


                if (!isset($_SESSION['loggedin'])) {
	           header('Location: Wishlist.php');
	           exit();
                }
            ?>
    </body>
</html>