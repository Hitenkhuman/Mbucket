<?php
session_start();
try {
    require_once "pdo.php";
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        unset($_SESSION['userid']);
        $sql = "SELECT * FROM users WHERE email_id=:mail AND  password=:pass";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(
            array(
                ':mail' => $_POST['email'],
                ':pass' => $_POST['pass']
            )
        );

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $_SESSION['login'] = true;
            $_SESSION['loginmsg'] = true;
            $_SESSION['userid'] = htmlentities($row['user_id']);
            echo $row['user_id'];
        } else {

            $_SESSION['login'] = false;
            echo "error";
        }
    }
} catch (PDOException $error) {
    $em = $error->getMessage();
    echo "$em";
}
