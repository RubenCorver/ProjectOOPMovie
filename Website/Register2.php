<!DOCTYPE html>
<html>
        <body>
<?php

            $username = $_POST["username"];
            $password = $_POST["password"];
        
            require_once "connect.php";
            $sql = $conn->prepare("
                                    insert into user
                                    (
                                        :username, :password
                                    )
                                ");
        $sql->execute([
                        "username" => $username,
                        "password" => $password,
                     ]);
?>
    </body>
</html>