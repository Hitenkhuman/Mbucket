<?php

session_start();
try {
    $output = '<div class="col-12 col-md-6 form-group">
    <label for="model1" class="bt">Model 1:</label>
    <select name="model1" id="model1" class="sbox">';
    require_once "pdo.php";
    if (isset($_POST['id1']) && isset($_POST['id2'])) {
        $stmt = $pdo->prepare("SELECT *from models WHERE brand_id=:id");
        $stmt->execute(array(':id' => $_POST['id1']));
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<option value="' . $row['model_id'] . '">' . $row['mobile_name'] . '</option>';
        }
        $output .= ' </select>
        </div>
        <div class="col-12 col-md-6">
            <label for="model2" class="bt">Model 2:</label>
            <select name="model2" id="model2" class="sbox">';
        $stmt = $pdo->prepare("SELECT *from models WHERE brand_id=:id");
        $stmt->execute(array(':id' => $_POST['id2']));
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<option value="' . $row['model_id'] . '">' . $row['mobile_name'] . '</option>';
        }
        $output .= ' </select>
        </div>';
        echo $output;
    } else {
        echo "error";
    }
} catch (PDOException $error) {
    echo $error;
}
