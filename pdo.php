<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=mbucket', 'hiten', 'hiten8225');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//for errors
