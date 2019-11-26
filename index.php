<?php include('include/header.php'); ?>

<?php
require('utils/db.php');

$db = dbConnect();

$stmt = $db->prepare('SELECT * FROM teams');
$stmt->execute();
$teams = $stmt->fetchAll();
?>

<div class="container">
    <?php foreach ($teams as $team) { ?>
        <div class="card mb-3 rounded shadow-sm p-3 mb-5 bg-white rounded text-center">
            <div class="row no-gutters">
                <div class="col-md-2 teams">
                <img src="<?= $team['logo'] ?>" class="card-img" alt="logo de l'équipe">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $team['short_name'] ?></h5>
                    <p class="card-text"><?= $team['adress'] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $team['link'] ?></small></p>
                </div>
                </div>
            </div>
        </div>
            
    <?php } ?>
</div>

<?php include('include/footer.php'); ?>