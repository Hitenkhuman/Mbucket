<?php
require_once "pdo.php";
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $var = $row['user_id'];
}
echo "hello";
