<?php include('include/header.php'); ?>

<?php
require('utils/db.php');        

$db = dbConnect();

$stmt = $db->prepare('SELECT * FROM matchs');  
$stmt->execute();
$matchs = $stmt->fetch();

var_dump($matchs);

?>


<?php include('include/footer.php'); ?>