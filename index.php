<?php include('include/header.php'); ?>

<?php
require('utils/db.php');

$db = dbConnect();

$stmt = $db->prepare('SELECT * FROM teams');
$stmt->execute();
$teams = $stmt->fetchAll();
?>

<div class="container">
    <div class="row">
    <?php foreach ($teams as $team) { ?>
        <div class="col-4">
            <div class='card-image'>
                <img class="img_livre" src="<?php echo $team["image"]; ?> " class="card-img-top" alt="<?php echo $team ['title']; ?> ">
            </div> 
            <div class="card-body">
                <h5 class="card-title">
                <a href="?action=book&id=<?php echo $team['id']; ?>">
                        <?php echo $team['name']; ?>
                </a>
                </h5>
                <p><?php echo $team ['author']; ?> </p>

                <?php foreach ($teams as $team) { ?>
            <div class="col-lg-3 col-md-4 mt-4">
                <?php echo $team['name']; ?>
            </div>
        <?php } ?>
   
    </div>
</div>

<?php include('include/footer.php'); ?>