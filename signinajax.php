<?php

session_start();
try {
    require_once "pdo.php";
    if (isset($_POST['useremail']) && isset($_POST['usermobile']) && isset($_POST['userpass'])) {
        unset($_SESSION['userid']);
        $_SESSION['login'] = false;
        $sql = "INSERT INTO users(email_id,mobile_number, password ) VALUES (:email,:mobile,:userpass)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(
            array(
                ':email' => $_POST['useremail'],
                ':mobile' => $_POST['usermobile'],
                ':userpass' => $_POST['userpass']
            )
        );
        if ($stmt->rowCount() > 0) {
            $sql = "SELECT * FROM users WHERE email_id=:mail AND  password=:pass";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(
                array(
                    ':mail' => $_POST['useremail'],
                    ':pass' => $_POST['userpass']
                )
            );

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $_SESSION['login'] = true;
                $_SESSION['signin'] = true;
                $_SESSION['userid'] = htmlentities($row['user_id']);
                echo $row['user_id'];
            } else {

                $_SESSION['login'] = false;
                $_SESSION['signin'] = false;
                echo "eroor";
            }
        }
    }
} catch (PDOException $error) {
    echo "ERROR" . $error->getMessage();
}
