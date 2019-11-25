<?php
require('utils/db.php');

function getTeams() {

    $db = dbConnect();

    $stmt = $db->prepare('SELECT * FROM teams');
    $stmt->execute();
    
    return $stmt->fetchAll();
}