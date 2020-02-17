<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
        header("location: gar-menuK.php
        ");
    }
?>
<!doctype html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>admin menu</title>
    </head>
    <body>
    <ul class="menuul">
        <li class="menu"><a href="logout.php">Admin Logout</a></li>
        </ul>
        <h2>Admin menu:</h2>
        
         <?php
            require_once "connect.php";
            
            $Users = $conn->prepare("
                                        select ID, User
                                        from loginform
                                     ");
            $Users->execute();
            echo "<table>";
                foreach($Users as $use)
                {
                    echo "<tr>";
                    echo "<td>" . $use["ID"] . "</td>";
                    echo "<td>" . $use["User"] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        ?>
    </body>
</html>