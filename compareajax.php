<?php

session_start();
try {
    $output = '';
    require_once "pdo.php";
    if (isset($_POST['id1']) && isset($_POST['id2'])) {
        $stmt = $pdo->prepare("SELECT * FROM brands INNER JOIN models ON brands.brand_id=models.brand_id JOIN mobiles ON models.model_id=mobiles.model_id WHERE mobile_id=:id");
        $stmt->execute(array(':id' => $_POST['id1']));
        $row1 = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = $pdo->prepare("SELECT * FROM brands INNER JOIN models ON brands.brand_id=models.brand_id JOIN mobiles ON models.model_id=mobiles.model_id WHERE mobile_id=:id");
        $stmt->execute(array(':id' => $_POST['id2']));
        $row2 = $stmt->fetch(PDO::FETCH_ASSOC);

        $output .= '<table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">specification</th>
                            <th scope="col">' . $row1['brand_name'] . '  ' . $row1['mobile_name'] . '</th>
                            <th scope="col">' . $row2['brand_name'] . '  ' . $row2['mobile_name'] . '</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Image</td>
                        <td><img src="./images/' . $row1['mobile_image'] . '.png" class="d-block w-100" alt="mobile image"></td>
                        <td><img src="./images/' . $row2['mobile_image'] . '.png" class="d-block w-100" alt="mobile image"></td>
                        </tr>
                        <tr>    
                            <td>Brand</td>
                            <td>' . $row1['brand_name'] . '</td>
                            <td>' . $row2['brand_name'] . '</td>
                        </tr>
                        <tr>
                            <td>Processor</td>
                            <td>' . $row1['processor'] . '</td>
                            <td>' . $row2['processor'] . '</td>
                        </tr>
                        <tr>
                            <td>Display</td>
                            <td>' . $row1['display'] . '</td>
                            <td>' . $row2['display'] . '</td>
                        </tr>
                        <tr>
                            <td>Screen Dimenstion</td>
                            <td>' . $row1['screen_dimenstion'] . '  mm</td>
                            <td>' . $row2['screen_dimenstion'] . '  mm</td>
                        </tr>
                        <tr>
                            <td>Front Camera</td>
                            <td>' . $row1['front_camera'] . '  MP</td>
                            <td>' . $row2['front_camera'] . '  MP</td>
                        </tr>
                        <tr>
                            <td>Rear Camera</td>
                            <td>' . $row1['rear_camera'] . '   MP</td>
                            <td>' . $row2['rear_camera'] . '   MP</td>
                        </tr>
                        <tr>
                            <td>Ram</td>
                            <td>' . $row1['ram'] . '  GB</td>
                            <td>' . $row2['ram'] . '  GB</td>
                        </tr>
                        <tr>
                            <td>Rom</td>
                            <td>' . $row1['rom'] . '  GB</td>
                            <td>' . $row2['rom'] . '  GB</td>
                        </tr>
                        <tr>
                            <td>Battery</td>
                            <td>' . $row1['battery'] . '  MAh</td>
                            <td>' . $row2['battery'] . '  MAh</td>
                        </tr>
                        <tr>
                            <td>Charging</td>
                            <td>' . $row1['charging'] . '</td>
                            <td>' . $row2['charging'] . '</td>
                        </tr>
                        <tr>
                            <td>SIM Support</td>
                            <td>' . $row1['sim'] . '</td>
                            <td>' . $row2['sim'] . '</td>
                        </tr>
                        <tr>
                            <td>Fingerprint</td>
                            <td>' . $row1['fingerprint_sensor'] . '</td>
                            <td>' . $row2['fingerprint_sensor'] . '</td>
                        </tr>
                        <tr>
                            <td>weight</td>
                            <td>' . $row1['weight'] . '  grams</td>
                            <td>' . $row2['weight'] . '  grams</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>₹' . $row1['price'] . '/-</td>
                            <td>₹' . $row2['price'] . '/-</td>
                        </tr>
                        <tr>
                            <td>Launch Date</td>
                            <td>' . $row1['launch_date'] . '</td>
                            <td>' . $row2['launch_date'] . '</td>
                        </tr>
                        <tr>
                            <td>Rattings</td>
                            <td>' . $row1['recommendation'] . '/10</td>
                            <td>' . $row2['recommendation'] . '/10</td>
                        </tr>
                    </tbody>
                </table>';
        echo $output;
    } else {
        echo "error";
    }
} catch (PDOException $error) {
    echo $error;
}
