<?php

session_start();
try {
    require_once "pdo.php";
    if (isset($_SESSION['userid'])) {
        $user = $_SESSION['userid'];
    } else {
        $user = null;
    }
    if (isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['name']) && isset($_POST['sugg'])) {
        $sql = "INSERT INTO suggestion(user_id,name,email_id,mobile_number, suggestion) VALUES (:id,:name,:email,:mobile,:sugg)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $user,
                ':name' => $_POST['name'],
                ':email' => $_POST['email'],
                ':mobile' => $_POST['mobile'],
                ':sugg' => $_POST['sugg']
            )
        );
        if ($stmt->rowCount() > 0) {
            echo 1;
        } else {
            echo 0;
        }
    }
} catch (PDOException $error) {
    echo "ERROR" . $error->getMessage();
}
