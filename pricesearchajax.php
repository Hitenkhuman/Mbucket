<?php

session_start();
try {
    require_once "pdo.php";
    $output = '';
    if (isset($_POST['price'])) {
        $sql = "SELECT * FROM mobiles WHERE price BETWEEN :low AND :high";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(
            array(
                ':low' => $_POST['price'] - 5000,
                ':high' => $_POST['price'] + 5000
            )
        );
        if ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            foreach ($row as $key => $value) {
                $modelid = $value['model_id'];

                $stmt = $pdo->prepare("SELECT * FROM brands INNER JOIN models ON brands.brand_id=models.brand_id JOIN mobiles ON models.model_id=mobiles.model_id WHERE mobile_id=:id");
                $stmt->execute(array(':id' => $modelid));
                $row1 = $stmt->fetch(PDO::FETCH_ASSOC);

                $mobimg = $row1['mobile_image'];
                $output .= ' <div class="row mbox rbx m-5">';
                $output .= '<div class="col-12 col-md-5">';
                $output .= ' <img src="./images/' . $mobimg . '.png" alt="mobile image" class="img-fluid">';
                $output .= ' </div>';
                $output .= '<div class="col-12 col-md-7">';
                $output .= ' <div class="pt-md-3">';
                $output .= '<h1 class="mobname">' . $row1["brand_name"] . ' ' . $row1["mobile_name"] . '</h1>';
                $output .= '</div>';
                $output .= ' <div class="price">';
                $output .= ' <h2><span> ₹ </span><span>' . $row1["price"] . '</span></h2>';
                $output .= ' </div>';
                $output .= '<div class="rating">';
                for ($i = 0; $i < $row1['recommendation']; $i++) {
                    $output .= '<span class="fa fa-star checked"></span>';
                }
                $remain = 10 - $row1['recommendation'];
                for ($i = 0; $i < $remain; $i++) {
                    $output .= '<span class="fa fa-star"></span>';
                }
                $output .= '</div>';
                $output .= ' <div class="info">';
                $output .= ' <a href="mobileinfo.php?id=' . $row1['model_id'] . '" class="ckitbtn btn mt-3">Check it</a>';
                $output .= ' </div>';
                $output .= '  </div>';
                $output .= '</div>';
            }
            echo $output;
        } else {
            echo 0;
        }
    } else {
        echo "NO MOBILE FOUND";
    }
} catch (PDOException $error) {
    echo "ERROR" . $error->getMessage();
}
