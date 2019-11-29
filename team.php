<?php include('include/header.php'); ?>

<?php
require('utils/db.php');

$db = dbConnect();

$idTeam = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM teams WHERE id = :id_team');
$stmt->bindValue(':id_team', $idTeam);
$stmt->execute();
$team = $stmt->fetch();
var_dump($team);
?>



<div class="container">
    <?php foreach ($teams as $team) { ?>